<?php
namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractStatusUpdateHandler;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\Update;

class StatusUpdateHandler extends BaseHandler
{
    protected $filters;

    public function __construct(HandlerCallback $callback, $filters = null)
    {
        $this->filters = $filters;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$statusUpdate::filter($update, $this->filters)) {
            return false;
        } else if (!Filters::filter($update, $this->filters)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        /** @var $instance AbstractStatusUpdateHandler */
        $instance = $this->callback->getCallback();
        $instance->init($dispatcher->getBot(), $update, $update->getEffectiveMessage());
        $method = $this->callback->getMethodToCall();
        $result = $instance->$method();
        //TODO: destruct
        return $result;
    }
}