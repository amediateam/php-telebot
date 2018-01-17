<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;

class PreCheckoutQueryHandler extends BaseHandler
{
    public function __construct(callable $callback)
    {
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$preCheckoutQuery::filter($update)) {
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
        return [$botApi, $update, $update->getPreCheckoutQuery()];
    }
}