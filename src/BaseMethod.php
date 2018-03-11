<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Exceptions\HttpException;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Exceptions\InvalidJsonException;
use TelegramBot\Api\Exceptions\TelegramException;

/**
 * Class BaseType
 * Base class for Telegram Methods
 *
 * @package TelegramBot\Api
 */
abstract class BaseMethod extends KeyValuePairStore
{
    /** @var BotApi */
    protected $botApi;
    public static $method;

    public function __construct(BotApi $bot = null)
    {
        parent::__construct();
        if ($bot instanceof BotApi) {
            $this->setBot($bot);
        }
    }

    public static function newInstance(BotApi $bot = null)
    {
        return new static($bot);
    }

    public function getMethod()
    {
        return static::$method;
    }

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

    /**
     * @return mixed
     * @throws HttpException
     * @throws TelegramException|InvalidArgumentException|InvalidJsonException
     */
    public function invoke()
    {
        if (!($this->botApi instanceof BotApi)) {
            throw new TelegramException("BotApi not defined!");
        }
        return $this->botApi->call($this);
    }
}
