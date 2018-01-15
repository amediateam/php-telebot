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
        $this->addBatchHandler([$handler], $force);
    }

    public function addBatchHandler(array $handlers, $force = false)
    {
        foreach ($handlers as $handler) {
            if ($force) {
                array_push($this->forceHandlers, $handler);
            } else {
                array_push($this->handlers, $handler);
            }
        }
    }

    public function removeHandler(BaseHandler $handler, $force = false)
    {
        if ($force) {
            $search = array_search($handler, $this->forceHandlers);
        } else {
            $search = array_search($handler, $this->handlers);
        }
        if ($search !== false) {
            if ($force) {
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