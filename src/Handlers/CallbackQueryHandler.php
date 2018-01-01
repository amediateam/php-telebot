<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;
use function preg_match;

class CallbackQueryHandler extends BaseHandler
{
    protected $regex;

    public function __construct(callable $callback, $regex = null)
    {
        $this->regex = $regex;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$callbackQuery::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getCallbackQuery()->getData())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getCallbackQuery()->getData(), $matches);
        }
        return $this->callback->invokeArgs([$dispatcher->getBot(), $update, $update->getCallbackQuery(), $matches]);
    }
}