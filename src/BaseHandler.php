<?php
namespace TelegramBot\Api;
use ReflectionFunction;
use TelegramBot\Api\Types\Update;

abstract class BaseHandler
{
    protected $callback;

    public function __construct(Callable $callback)
    {
        $this->callback = new ReflectionFunction($callback);
    }

    abstract public function checkUpdate(Update $update);

    abstract public function handleUpdate(Update $update, Dispatcher $dispatcher);
}