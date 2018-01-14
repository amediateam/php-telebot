<?php

namespace TelegramBot\Api;

use function is_numeric;
use function lcfirst;
use const PHP_EOL;
use TelegramBot\Api\Extension\InputFile;

class KeyValuePairStore
{
    protected static $requiredParams = [];
    protected static $map = [];
    protected $data = [];
    protected static $defaultData = [];
    protected $hasInputFile = false;

    public function __construct()
    {
        $this->data = static::$defaultData;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function __call($name, $arguments)
    {
        $threeFirstChars = strtolower(substr($name, 0, 3));
        $twoFirstChars = substr($threeFirstChars, -2);
        if ($threeFirstChars == 'get' || $twoFirstChars == 'is') { //is for boolean
            $property = self::toUnderscoreCase(substr($name, $threeFirstChars == 'get' ? 3 : 2));
            if (array_key_exists($property, static::$map)) {
                if (isset($this->data[$property])) {
                    return $this->data[$property];
                }
                return false;
            }
            throw new InvalidArgumentException();
        } else if ($threeFirstChars == 'set') {
            $property = self::toUnderscoreCase(substr($name, 3));
            if (array_key_exists($property, static::$map)) {
                if (self::validateType($arguments[0], static::$map[$property])) {
                    if (is_array(static::$map[$property])) {
                        if (in_array(InputFile::class, static::$map[$property])) {
                            $this->hasInputFile = $arguments[0] instanceof InputFile;
                        }
                    } else if (static::$map[$property] == InputFile::class) {
                        $this->hasInputFile = $arguments[0] instanceof InputFile;
                    }
                    return $this->data[$property] = $arguments[0];
                }
                throw new InvalidArgumentException("Invalid type supplied for " . substr($name, 3) . " (needs type: " . static::$map[$property] . ").");
            }
        }
        return true;
    }

    /**
     * @param $value
     * @param $type
     * @return bool|float|int|string
     * @throws InvalidArgumentException
     */
    public static function getValueByType($value, $type, $botApi = null)
    {
        if ($type == 'string') {
            return (string)$value;
        } else if ($type == 'integer') {
            return (int)$value;
        } else if ($type == 'boolean') {
            return (bool)$value;
        } else if ($type == 'float') {
            return (float)$value;
        } else if (strpos($type, 'TelegramBot\\Api\\Types\\') !== false) {
            return $type::fromResponse($botApi, $value);
        } else if (strpos($type, 'ArrayOf') !== false) {
            return $type::fromResponse($botApi, $value);
        }
        throw new InvalidArgumentException("Type $type not implemented.");
    }

    public static function validateType($value, $types)
    {
        if (!is_array($types)) {
            $types = [$types];
        }
        $sumUp = false;
        foreach ($types as $type) {
            $condition = true;
            if ($type == 'string') {
                $condition = is_string($value) || is_numeric($value) || is_float($value) || is_bool($value);
            } else if ($type == 'integer') {
                $condition = is_numeric($value);
            } else if ($type == 'boolean') {
                $condition = is_bool($value);
            } else if ($type == 'float') {
                $condition = is_float($value);
            } else if (
                strpos($type, 'TelegramBot\\Api\\Types\\') !== false ||
                strpos($type, 'TelegramBot\\Api\\Iterators\\') !== false) {
                if (is_a($value, '\\' . $type)) {
                    $condition = true;
                } else {
                    $condition = $type::validate($value);
                }
            }
            if ($condition) {
                $sumUp = true;
                break;
            }
        }
        return $sumUp;
    }


    public function mergeData($data)
    {
        $this->data = array_merge($this->data, $data);
    }


    /**
     * @param $v
     * @return array|string
     * @throws InvalidArgumentException
     * @throws MissingParameterException
     */
    private function jsonLoopThroughArray($v)
    {
        if ($v instanceof BaseType || $v instanceof BaseMethod) {
            return $v->toJson(true);
        } else if ($v instanceof InputFile) {
            return $v->getInputFile();
        }
        if (is_array($v)) {
            return array_map([$this, 'jsonLoopThroughArray'], $v);
        };
        return $v;
    }

    /**
     * @param bool $inner
     * @return array|string
     * @throws MissingParameterException|InvalidArgumentException
     */
    public function toJson($inner = false)
    {
        foreach (static::$requiredParams as $param) {
            if (!array_key_exists($param, $this->data) || is_null($this->data[$param])) {
                $param = self::toCamelCase($param);
                throw new MissingParameterException("Missing parameter \"$param\" in \"" . basename(get_class($this)) . "\".");
            }
        }
        $output = [];
        foreach ($this->data as $key => $value) {
            if (!is_null($value)) {
                if (!self::validateType($value, static::$map[$key])) {
                    throw new InvalidArgumentException("Invalid type supplied for \"" . lcfirst(self::toCamelCase($key)) . "\" (needs type: " . static::$map[$key] . ").");
                }

                if (is_array($value)) {
                    $output[$key] = array_map([$this, 'jsonLoopThroughArray'], $value);
                } else if ($value instanceof BaseType || $value instanceof BaseMethod) {
                    $output[$key] = $value->toJson(true);
                } else if ($value instanceof InputFile) {
                    $output[$key] = $value->getInputFile();
                } else {
                    $output[$key] = $value;
                }
            }
        }
        return $inner === false ? json_encode($output) : $output;
    }

    public static function toCamelCase($str)
    {
        return str_replace(" ", "", ucwords(str_replace("_", " ", $str)));
    }

    public static function toUnderscoreCase($str)
    {
        return strtolower(preg_replace('/(?<=\\w)(?=[A-Z])/', "_$1", $str));
    }

    public static function getDefaultData()
    {
        return static::$defaultData;
    }

    public function hasInputFile()
    {
        return $this->hasInputFile;
    }

    public function __toString()
    {
        return $this->toJson();
    }
}