<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractStatusUpdateHandler;
use TelegramBot\Api\Types\Update;

class StatusUpdateHandler extends BaseHandler
{
    protected $filters;

    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
        $handler = $callback->getCallback(false);
        /** @var $handler AbstractStatusUpdateHandler */
        $this->filters = $handler->getFilters();
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$statusUpdate::filter($update, $this->filters)) {
            return false;
        } else if (!Filters::filter($update, $this->filters)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        /** @var $instance AbstractStatusUpdateHandler */
        $instance = $this->callback->getCallback();
        $instance->init($botApi, $update, $update->getEffectiveMessage());
        $method = $this->callback->getMethodToCall();
        $result = $instance->callMethod($method);
        //TODO: destruct
        return $result;
    }
}