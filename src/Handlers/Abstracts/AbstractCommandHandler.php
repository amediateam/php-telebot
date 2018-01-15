<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

abstract class AbstractCommandHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var Message */
    protected $message;
    /** @var BotApi */
    protected $bot;

    public function init(BotApi $bot, Update $update, Message $message)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->message = $message;
    }

    abstract public function handle(TextCommand $command);
}