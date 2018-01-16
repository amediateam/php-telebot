<?php
namespace TelegramBot\Api;

use TelegramBot\Api\Handlers\HandlerCallback;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\Update;

abstract class BaseHandler
{
    protected $callback;
    public function __construct(HandlerCallback $callback)
    {
        $this->callback = $callback; //function or class method
    }

    abstract public function checkUpdate(Update $update, State $state = null);

    abstract public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null);
}