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
        array_push($force ? $this->forceHandlers : $this->handlers, $handler);
    }

    public function addBatchHandler(array $handlers, $force = false)
    {
        foreach ($handlers as $handler) {
            array_push($force ? $this->forceHandlers : $this->handlers, $handler);
        }
    }

    public function removeHandler(BaseHandler $handler, $force = false)
    {
        $search = array_search($handler, $this->handlers);
        if ($search !== false) {
            if($force){
                unset($this->forceHandlers[$search]);
            } else {
                unset($this->handlers[$search]);
            }
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