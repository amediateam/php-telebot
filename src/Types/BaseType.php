<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\CaseConverter;
use TelegramBot\Api\Exceptions\TelegramException;
use function array_key_exists;
use function property_exists;

abstract class BaseType
{
    protected $botApi;
    protected $rawData;

    public function __construct(array $data, BotApi $botApi)
    {
        $this->rawData = $data;
        $this->botApi = $botApi;
    }

    /**
     * @param $name
     * @param $arguments
     * @throws TelegramException
     */
    public function __call($name, $arguments)
    {
        if (substr($name, 0, 3) == 'get') {
            $property = CaseConverter::toUnderscoreCase(substr($name, 3));
            if (property_exists($this, $property)) {
                return $this->$property;
            }
            throw new TelegramException("Invalid property.");
        }
        throw new TelegramException("Method not implemented.");
    }

    protected function getPropertyFromData($name, $class = null, $default = null)
    {
        $value = $default;
        if (array_key_exists($name, $this->rawData)) {
            if ($class) {
                switch ($class) {
                    case 'int':
                    case 'integer':
                        $value = (int)$this->rawData[$name];
                        break;
                    case 'str':
                    case 'string':
                        $value = (string)$this->rawData[$name];
                        break;
                    case 'bool':
                    case 'boolean':
                        $value = (bool)$this->rawData[$name];
                        break;
                    case 'float':
                        $value = (float)$this->rawData[$name];
                        break;
                    default:
                        $value = new $class($this->rawData[$name], $this->botApi);
                }
            }
        }
        return $value;
    }

}