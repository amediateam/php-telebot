<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\State\State;

abstract class BaseAbstract
{
    protected $state = null;

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function hasState()
    {
        return $this->state instanceof State;
    }

    public function populateProperties()
    {
        
    }
}