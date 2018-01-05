<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;

class ChosenInlineResultHandler extends BaseHandler
{

    public function __construct(callable $callback)
    {
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$chosenInlineResult::filter($update)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher)
    {
        return $this->invokeArgs([$dispatcher->getBot(), $update, $update->getChosenInlineResult()]);
    }
}