<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractMessageHandler;
use TelegramBot\Api\Handlers\Abstracts\AbstractStatusUpdateHandler;
use TelegramBot\Api\State;
use TelegramBot\Api\Types\Update;

class MessageHandler extends BaseHandler
{
    protected $filters;

    public function __construct(AbstractMessageHandler $callback, array $filters = [])
    {
        $this->filters = $filters;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$statusUpdate::filter($update, $this->filters)) {
            return false;
        }
        foreach ($this->filters as $filter) {
            if (!$filter::filter($update)) return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        /** @var $instance AbstractStatusUpdateHandler */
        $instance = clone $this->callback;
        $instance->init($dispatcher->getBot(), $update, $update->getEffectiveMessage());
        $result = $instance->handle();
        //TODO: destruct
        return $result;
    }
}