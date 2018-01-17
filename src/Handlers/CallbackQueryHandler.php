<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractCallbackQueryHandler;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\Update;

class CallbackQueryHandler extends BaseHandler
{
    protected $regex;

    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
        $handler = $callback->getCallback(false);
        /** @var $handler AbstractCallbackQueryHandler */
        $this->regex = $handler->getRegex();
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$callbackQuery::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getCallbackQuery()->getData())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getCallbackQuery()->getData(), $matches);
        }
        /** @var $instance AbstractCallbackQueryHandler */
        $instance = $this->callback->getCallback();
        $instance->setState($state);
        $instance->init($dispatcher->getBot(), $update, $update->getCallbackQuery(), $matches);
        $method = $this->callback->getMethodToCall();
        $result = $instance->callMethod($method);
        //TODO: destruct
        return $result;
    }
}