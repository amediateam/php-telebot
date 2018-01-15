<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Types\Update;

abstract class Dispatcher
{
    /** @var BotApi */
    protected $botApi;

    protected $handlers = [];

    protected $forceHandlers = [];

    public function addHandler(BaseHandler $handler, $force = false)
    {
        $handlersArray = &($force ? $this->forceHandlers : $this->handlers);
        array_push($handlersArray, $handler);
    }

    public function addBatchHandler(array $handlers, $force = false)
    {
        $handlersArray = &($force ? $this->forceHandlers : $this->handlers);
        foreach ($handlers as $handler) {
            array_push($handlersArray, $handler);
        }
    }

    public function removeHandler(BaseHandler $handler, $force = false)
    {
        $handlersArray = &($force ? $this->forceHandlers : $this->handlers);
        $search = array_search($handler, $handlersArray);
        if ($search !== false) {
            unset($handlersArray[$search]);
        }
    }

    public function __construct($token)
    {
        $this->botApi = new BotApi($token);
    }

    /**
     * @return BotApi
     */
    public function getBot()
    {
        return $this->botApi;
    }


    abstract public function processUpdate(Update $update);
}