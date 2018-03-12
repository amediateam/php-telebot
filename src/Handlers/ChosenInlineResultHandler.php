<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters;
use TelegramBot\Api\Types\Update;

class ChosenInlineResultHandler extends BaseHandler
{
    protected $regex = null;
    protected $matches = [];

    public function __construct(callable $callback, $regex = [])
    {
        parent::__construct($callback);
        if(!is_null($this->regex)){
            if (!is_array($regex)) {
                $regex = [$regex];
            }
            $this->regex = $regex;
        }
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::chosenInlineResult()($update)) {
            return false;
        }
        if (!is_null($this->regex) && sizeof($this->regex)) {
            foreach ($this->regex as $regex) {
                if (preg_match($regex, $update->getChosenInlineResult()->getQuery(), $this->matches))
                    return true;
            }
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