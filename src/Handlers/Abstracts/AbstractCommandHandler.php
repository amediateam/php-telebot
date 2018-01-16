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
    /** @var TextCommand */
    protected $command;

    public function init(BotApi $bot, Update $update, Message $message, TextCommand $command)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->message = $message;
        $this->command = $command;
    }
}