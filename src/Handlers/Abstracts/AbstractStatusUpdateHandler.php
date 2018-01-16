<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

abstract class AbstractStatusUpdateHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var Message */
    protected $message;
    /** @var BotApi */
    protected $bot;
    /** @var array|null */
    protected $filters = null;

    public function init(BotApi $bot, Update $update, Message $message)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->message = $message;
    }

    public function getFilters()
    {
        return $this->filters;
    }
}