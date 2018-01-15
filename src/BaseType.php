<?php

namespace TelegramBot\Api;

/**
 * Class BaseType
 * Base class for Telegram Types
 *
 * @package TelegramBot\Api
 */
abstract class BaseType extends KeyValuePairStore
{
    /**
     * Array of required data params for type
     *
     * @var array
     */
    protected static $requiredParams = [];

    /**
     * Validate input data
     *
     * @param array $data
     *
     * @return bool
     *
     * @throws InvalidArgumentException
     */
    public static function validate($data)
    {
        if (sizeof(static::$requiredParams)) {
            if (!is_array($data)) return false;
        }
        if (count(array_intersect_key(array_flip(static::$requiredParams), $data)) === count(static::$requiredParams)) {
            return true;
        }
        throw new InvalidArgumentException();
    }


    public function __construct(BotApi $bot = null)
    {
        parent::__construct();
        if ($bot instanceof BotApi) {
            $this->setBot($bot);
        }
    }


    /**
     * @param $data
     * @throws InvalidArgumentException
     */

    public function map($data)
    {
        foreach (static::$map as $key => $item) {
            if (isset($data[$key]) && (!is_array($data[$key]) || (is_array($data[$key]) && !empty($data[$key])))) {
                if (class_exists($item)) {
                    /** @var $item BaseType */
                    $this->data[$key] = $item::fromResponse($this->botApi, $data[$key]);
                } else {
                    $this->data[$key] = $data[$key];
                }
            } else if (isset($this->defaultData[$key])) {
                $this->data[$key] = static::$defaultData[$key];
            }
        }
    }

    /**
     * @param $data
     * @return bool|static
     * @throws InvalidArgumentException
     */
    public static function fromResponse(BotApi $bot, $data)
    {
        if ($data === true) {
            return true;
        }

        static::validate($data);
        $instance = new static($bot);
        $instance->map($data);

        return $instance;
    }

    public static function getMap()
    {
        return static::$map;
    }

    /** @var BotApi */
    protected $botApi;

    public function setBot(BotApi $bot)
    {
        $this->botApi = $bot;
    }

    /**
     * @return BotApi
     * @throws TelegramException
     */
    public function getBot()
    {
        if (!($this->botApi instanceof BotApi)) {
            throw new TelegramException("No botApi was passed to this type.");
        }
        return $this->botApi;
    }
}
