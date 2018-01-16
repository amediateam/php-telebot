<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

abstract class AbstractMessageHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var Message */
    protected $message;
    /** @var BotApi */
    protected $bot;
    /** @var bool */
    protected $messageUpdates = true;
    /** @var bool */
    protected $channelPostUpdates = true;
    /** @var bool */
    protected $editedUpdates = false;
    /** @var bool */
    protected $commandUpdates = false;
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

    public function shouldMessageUpdatesBeHandled()
    {
        return $this->messageUpdates;
    }

    public function shouldChannelPostUpdatesBeHandled()
    {
        return $this->channelPostUpdates;
    }

    public function shouldCommandUpdatesBeHandled()
    {
        return $this->commandUpdates;
    }

    public function shouldEditedUpdatesBeHandled()
    {
        return $this->editedUpdates;
    }
}