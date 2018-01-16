<?php

namespace TelegramBot\Api\Handlers;

use function method_exists;
use TelegramBot\Api\Handlers\Abstracts\BaseAbstract;
use TelegramBot\Api\InvalidArgumentException;

class HandlerCallback
{
    protected $callback, $methodToCall;

    /**
     * HandlerCallback constructor.
     * @param BaseAbstract $instance
     * @param string $methodToCall
     * @throws InvalidArgumentException
     */
    public function __construct(BaseAbstract $callback, $methodToCall = 'handle')
    {
        if (!method_exists($callback, $methodToCall)) {
            throw new InvalidArgumentException("Handler callback does not have method $methodToCall.");
        }
        $this->callback = $callback;
        $this->methodToCall = $methodToCall;
    }

    /**
     * @return BaseAbstract
     */
    public function getCallback()
    {
        return clone $this->callback;
    }

    /**
     * @return string
     */
    public function getMethodToCall()
    {
        return $this->methodToCall;
    }
}