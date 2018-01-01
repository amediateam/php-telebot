<?php

namespace TelegramBot\Api;
class Updater
{
    private $dispatcher;

    public function __construct($token)
    {
        $this->dispatcher = new Dispatcher($token);
    }

    public function getDispatcher()
    {
        return $this->dispatcher;
    }
}