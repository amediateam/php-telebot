<?php

namespace TelegramBot\Api;

use Closure;
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
            if ($this->callback->getClosureScopeClass() === null || $this->callback->getClosureThis() !== null) {
                Closure::bind($this->callback->getClosure(), $this->callback->getClosureThis(), $this->callback->getClosureScopeClass());
            }
        }
    }

    abstract public function checkUpdate(Update $update);

    abstract public function handleUpdate(Update $update, Dispatcher $dispatcher);

    public function invokeArgs(array $args = [])
    {
        if ($this->callback instanceof ReflectionMethod) {
            return $this->callback->invokeArgs($this->callbackArr[0], $args);
        }
        return $this->callback->invokeArgs($args);
    }
}