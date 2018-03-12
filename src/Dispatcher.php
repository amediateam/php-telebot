<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Handlers\BaseHandler;
use TelegramBot\Api\Types\Update;
use function is_callable;

abstract class Dispatcher
{
    /** @var BotApi */
    protected $botApi;
    protected $handlers = [];
    protected $errorHandlers = [];

    public function __construct(BotApi $botApi)
    {
        $this->botApi = $botApi;
    }

    public function addErrorHandler(callable $callback)
    {
        $this->errorHandlers[] = $callback;
    }

    public function addBatchErrorHandler($callbacks = [])
    {
        foreach ($callbacks as $callback) {
            if (is_callable($callbacks)) {
                $this->addBatchHandler($callback);
            }
        }
    }

    public function removeErrorHandler(callable $callback)
    {
        $search = array_search($callback, $this->errorHandlers);
        unset($this->errorHandlers[$search]);
    }

    public function addHandler(BaseHandler $handler)
    {
        $this->addBatchHandler([$handler]);
    }

    public function addBatchHandler(array $handlers)
    {
        foreach ($handlers as $handler) {
            if ($handler instanceof BaseHandler) {
                array_push($this->handlers, $handler);
            }
        }
    }

    public function removeHandler(BaseHandler $handler)
    {
        $search = array_search($handler, $this->handlers);
        if ($search !== false) {
            unset($this->handlers[$search]);
        }
    }

    protected function checkAndRun(BaseHandler $handler, Update $update)
    {
        /** @var $handler BaseHandler */
        if ($handler->checkUpdate($update)) {
            return $handler->handleUpdate($this->botApi, $update);
        }
        return -1;
    }

    abstract public function processUpdate(Update $update);
}