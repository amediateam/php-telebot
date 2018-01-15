<?php

namespace TelegramBot\Api;

use Exception;
use TelegramBot\Api\Types\Update;

class StatelessDispatcher extends Dispatcher
{
    /**
     * @var array BaseHandler[]
     */
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

    public function processUpdate(Update $update)
    {
        try {
            foreach ($this->handlers as $handler) {
                /** @var $handler BaseHandler */
                if ($handler->checkUpdate($update)) {
                    return $handler->handleUpdate($update, $this);
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            //TODO: log
        }
        return false;
    }
}