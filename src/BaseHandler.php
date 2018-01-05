<?php

namespace TelegramBot\Api;

use ReflectionFunction;
use ReflectionMethod;
use TelegramBot\Api\Types\Update;

abstract class BaseHandler
{
    protected $callbackArr;
    protected $callback;

    public function __construct(Callable $callback)
    {
        $this->callbackArr = $callback;
        if (is_array($callback)) {
            $this->callback = new ReflectionMethod($callback[0], $callback[1]);
        } else {
            $this->callback = new ReflectionFunction($callback);
        }
    }

    abstract public function checkUpdate(Update $update);

    abstract public function handleUpdate(Update $update, Dispatcher $dispatcher);

    public function invokeArgs(array $args = [])
    {
        if ($this->callback instanceof ReflectionMethod) {
            return $this->callback->invokeArgs($this->callbackArr[0], $args);
        }
        call_user_func(
            \Closure::bind(
                $this->callback->getClosure(),
                $this->callback->getClosureThis(),
                $this->callback->getClosureScopeClass()->name
            )
        );
        return $this->callback->invokeArgs($args);
    }
}