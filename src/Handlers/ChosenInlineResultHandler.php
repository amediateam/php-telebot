<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractChosenInlineResultHandler;
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

    public function checkUpdate(Update $update)
    {
        if (!Filters::$chosenInlineResult::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getChosenInlineResult()->getQuery())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getChosenInlineResult()->getQuery(), $matches);
        }
        /** @var $instance AbstractChosenInlineResultHandler */
        $instance = $this->callback->getCallback();
        $instance->init($botApi, $update, $update->getChosenInlineResult(), $matches);
        $method = $this->callback->getMethodToCall();
        $result = $instance->callMethod($method);
        //TODO: destruct
        return $result;
    }
}