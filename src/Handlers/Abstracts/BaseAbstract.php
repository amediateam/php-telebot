<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\State\State;

abstract class BaseAbstract
{
    protected $state;

    public function setState(State $state)
    {
        $this->state = $state;
    }
}