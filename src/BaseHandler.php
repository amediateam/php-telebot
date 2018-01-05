<?php
namespace TelegramBot\Api;

use TelegramBot\Api\Types\Update;
use function call_user_func_array;

abstract class BaseHandler
{
    protected $callback;

    public function __construct(Callable $callback)
    {
        $this->callback = $callback; //function or class method
    }

    abstract public function checkUpdate(Update $update);

    abstract public function handleUpdate(Update $update, Dispatcher $dispatcher);

    public function invokeArgs(array $args = [])
    {
        return call_user_func_array($this->callback, $args);
    }
}