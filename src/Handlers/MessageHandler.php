<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractMessageHandler;
use TelegramBot\Api\State;
use TelegramBot\Api\Types\Update;

class MessageHandler extends BaseHandler
{
    protected $filters;
    protected $messageUpdates;
    protected $channelPostUpdates;
    protected $editedUpdates;
    protected $commands;

    public function __construct(AbstractMessageHandler $callback, $filters = null, $commands = false, $messageUpdates = true, $channelPostUpdates = true, $editedUpdates = false)
    {
        $this->filters = $filters;
        $this->messageUpdates = $messageUpdates;
        $this->channelPostUpdates = $channelPostUpdates;
        $this->editedUpdates = $editedUpdates;
        $this->commands = $commands;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$message::filter($update, $this->filters)) {
            return false;
        } else if (!Filters::filter($update, $this->filters)) {
            return false;
        } else if (!$this->editedUpdates && $update->isEdited()) {
            return false;
        } else if (!$this->messageUpdates && ($update->getMessage() || $update->getEditedMessage())) {
            return false;
        } else if (!$this->channelPostUpdates && $update->isChannelPost()) {
            return false;
        } else if (!$this->commands && Filters::$text::filter($update) && substr($update->getMessage()->getText(), 0, 1) == '/') {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        /** @var $instance AbstractMessageHandler */
        $instance = clone $this->callback;
        $instance->init($dispatcher->getBot(), $update, $update->getEffectiveMessage());
        $instance->setState($state);
        $result = $instance->handle();
        //TODO: destruct
        return $result;
    }
}