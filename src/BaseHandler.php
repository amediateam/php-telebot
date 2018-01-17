<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Handlers\HandlerCallback;
use TelegramBot\Api\State\State;
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

    abstract public function getCallbackParameters(BotApi $botApi, Update $update);

    public function getCallback()
    {
        return $this->callback;
    }
}