<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractChosenInlineResultHandler;
use TelegramBot\Api\Handlers\Abstracts\BaseAbstract;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\Update;

class ChosenInlineResultHandler extends BaseHandler
{
    protected $regex;

    public function __construct(HandlerCallback $callback, $regex = null)
    {
        parent::__construct($callback);
        $handler = $callback->getCallback(false);
        /** @var $handler AbstractChosenInlineResultHandler */
        $this->regex = $handler->getRegex();
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$chosenInlineResult::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getChosenInlineResult()->getQuery())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getChosenInlineResult()->getQuery(), $matches);
        }
        /** @var $instance AbstractChosenInlineResultHandler */
        $instance = $this->callback->getCallback();
        $instance->setState($state);
        $instance->init($dispatcher->getBot(), $update, $update->getChosenInlineResult(), $matches);
        $method = $this->callback->getMethodToCall();
        $result = $instance->$method();
        //TODO: destruct
        return $result;
    }
}