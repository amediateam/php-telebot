<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

abstract class AbstractRegexHandler extends AbstractMessageHandler
{
    /** @var string|null */
    protected $regex = null;
    /** @var array */
    protected $matches = [];

    public function init(BotApi $bot, Update $update, Message $message, array $matches = [])
    {
        $this->matches = $matches;
        parent::init($bot, $update, $message);
    }

    public function getRegex()
    {
        return $this->regex;
    }
}