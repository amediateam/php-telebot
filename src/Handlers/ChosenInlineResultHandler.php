<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;
use function preg_match;

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
        return $this->callback->invokeArgs([$dispatcher->getBot(), $update, $update->getChosenInlineResult()]);
    }
}