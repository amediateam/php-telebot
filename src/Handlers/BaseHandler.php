<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Update;

abstract class BaseHandler
{
    protected $callback;

    public function __construct(callable $callback)
    {
        $this->callback = $callback; //function or class method
    }

    abstract public function checkUpdate(Update $update);

    abstract public function handleUpdate(BotApi $botApi, Update $update);

    abstract public function getCallArguments(BotApi $botApi, Update $update);

    public function getCallback()
    {
        return $this->callback;
    }
}