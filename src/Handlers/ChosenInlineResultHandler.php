<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;

class ChosenInlineResultHandler extends BaseHandler
{
    protected $regex;
    protected $matches = [];

    public function __construct(callable $callback, $regex = null)
    {
        parent::__construct($callback);
        $this->regex = $regex;
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$chosenInlineResult::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getChosenInlineResult()->getQuery(), $this->matches)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        return call_user_func_array($this->callback, $this->getCallArguments($botApi, $update));
    }

    public function getCallArguments(BotApi $botApi, Update $update)
    {
        return [$botApi, $update, $update->getChosenInlineResult(), $this->matches];
    }
}