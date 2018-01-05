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

    public function __construct(BotApi $bot)
    {
        $this->setBot($bot);
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
     * @return mixed
     * @throws HttpException
     * @throws TelegramException|InvalidArgumentException|InvalidJsonException
     */
    public function invoke()
    {
        return $this->botApi->call($this);
    }
}
