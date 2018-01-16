<?php

namespace TelegramBot\Api;

use ReflectionClass;
use TelegramBot\Api\Handlers\Abstracts\BaseAbstract;
use TelegramBot\Api\Handlers\HandlerCallback;
use TelegramBot\Api\Types\Update;
use function call_user_func_array;

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