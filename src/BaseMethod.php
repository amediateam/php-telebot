<?php

namespace TelegramBot\Api;

use function array_search;
use TelegramBot\Api\Extension\InputFile;

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
    protected $method;

    public function __construct(BotApi $bot = null)
    {
        if($bot instanceof BotApi){
            $this->setBot($bot);
        }
    }

    public function getMethod()
    {
        return $this->method;
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
            throw new TelegramException("BotApi not defined!");
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
