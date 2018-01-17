<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;
use function call_user_func_array;

class CallbackQueryHandler extends BaseHandler
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
        if (!Filters::$callbackQuery::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getCallbackQuery()->getData(), $this->matches)) {
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
        return [$botApi, $update, $update->getCallbackQuery(), $this->matches];
    }
}