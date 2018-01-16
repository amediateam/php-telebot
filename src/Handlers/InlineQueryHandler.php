<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractInlineQueryHandler;
use TelegramBot\Api\State;
use TelegramBot\Api\Types\Update;

class InlineQueryHandler extends BaseHandler
{
    protected $regex;

    public function __construct(HandlerCallback $callback, $regex = null)
    {
        $this->regex = $regex;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$inlineQuery::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getInlineQuery()->getQuery())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getInlineQuery()->getQuery(), $matches);
        }
        /** @var $instance AbstractInlineQueryHandler */
        $instance = $this->callback->getCallback();
        $instance->init($dispatcher->getBot(), $update, $update->getInlineQuery(), $matches);
        $instance->setState($state);
        $method = $this->callback->getMethodToCall();
        $result = $instance->$method();
        //TODO: destruct
        return $result;
    }
}