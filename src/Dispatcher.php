<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Types\Update;

abstract class Dispatcher
{
    /** @var BotApi */
    protected $botApi;

    protected $handlers = [];

    public function addHandler(BaseHandler $handler)
    {
        array_push($this->handlers, $handler);
    }

    public function addBatchHandler(array $handlers)
    {
        foreach ($handlers as $handler) {
            array_push($this->handlers, $handler);
        }
    }

    public function removeHandler(BaseHandler $handler)
    {
        $search = array_search($handler, $this->handlers);
        if ($search !== false) {
            unset($this->handlers[$search]);
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