<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\InlineQuery;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

abstract class AbstractMessageHandler extends BaseAbstract
{
    protected $update;
    protected $message;
    protected $bot;

    public function init(BotApi $bot, Update $update, Message $message)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->message = $message;
    }

    abstract public function handle();
}