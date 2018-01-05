<?php
namespace TelegramBot\Api;
use ReflectionFunction;
use ReflectionMethod;
use TelegramBot\Api\Types\Update;

abstract class BaseHandler
{
    protected $callback;

    public function __construct(Callable $callback)
    {
        if(is_array($callback)){
            $this->callback = new ReflectionMethod($callback[0], $callback[1]);
        } else {
            $this->callback = new ReflectionFunction($callback);
        }
    }

    abstract public function checkUpdate(Update $update);

    abstract public function handleUpdate(Update $update, Dispatcher $dispatcher);
}