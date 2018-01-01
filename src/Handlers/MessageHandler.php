<?php

namespace TelegramBot\Api\Handlers;

use function call_user_func_array;
use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;

class MessageHandler extends BaseHandler
{
    protected $filters;
    protected $messageUpdates;
    protected $channelPostUpdates;
    protected $editedUpdates;

    public function __construct(callable $callback, $filters = null, $messageUpdates = true, $channelPostUpdates = true, $editedUpdates = false)
    {
        $this->filters = $filters;
        $this->messageUpdates = $messageUpdates;
        $this->channelPostUpdates = $channelPostUpdates;
        $this->editedUpdates = $editedUpdates;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::filter($update, $this->filters)) {
            return false;
        } else if (!$this->editedUpdates && $update->isEdited()) {
            return false;
        } else if (!$this->messageUpdates && ($update->getMessage() || $update->getEditedMessage())) {
            return false;
        } else if (!$this->channelPostUpdates && $update->isChannelPost()) {
            return false;
        } else if (Filters::$text::filter($update) && substr($update->getMessage()->getText(), 0, 1) == '/') {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher)
    {
        return $this->callback->invokeArgs([$dispatcher->getBot(), $update, $update->getEffectiveMessage()]);
    }
}