<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

abstract class AbstractRegexHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var Message */
    protected $message;
    /** @var BotApi */
    protected $bot;
    /** @var array */
    protected $matches;

    public function init(BotApi $bot, Update $update, Message $message, array $matches = [])
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->message = $message;
        $this->matches = $matches;
    }
}