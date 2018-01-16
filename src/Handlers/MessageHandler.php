<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractMessageHandler;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\Update;

class MessageHandler extends BaseHandler
{
    protected $filters;
    protected $messageUpdates;
    protected $channelPostUpdates;
    protected $editedUpdates;
    protected $commandUpdates;

    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
        $handler = $callback->getCallback(false);
        /** @var $handler AbstractMessageHandler */
        $this->filters = $handler->getFilters();
        $this->messageUpdates = $handler->shouldMessageUpdatesBeHandled();
        $this->editedUpdates = $handler->shouldEditedUpdatesBeHandled();
        $this->channelPostUpdates = $handler->shouldChannelPostUpdatesBeHandled();
        $this->commandUpdates = $handler->shouldCommandUpdatesBeHandled();
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$message::filter($update, $this->filters)) {
            return false;
        } else if (Filters::$statusUpdate::filter($update, $this->filters)) {
            return false;
        } else if (!Filters::filter($update, $this->filters)) {
            return false;
        } else if (!$this->editedUpdates && $update->isEdited()) {
            return false;
        } else if (!$this->messageUpdates && ($update->getMessage() || $update->getEditedMessage())) {
            return false;
        } else if (!$this->channelPostUpdates && $update->isChannelPost()) {
            return false;
        } else if (!$this->commandUpdates && Filters::$text::filter($update) && substr($update->getMessage()->getText(), 0, 1) == '/') {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        /** @var $instance AbstractMessageHandler */
        $instance = $this->callback->getCallback();
        $instance->init($dispatcher->getBot(), $update, $update->getEffectiveMessage());
        $instance->setState($state);
        $method = $this->callback->getMethodToCall();
        $result = $instance->$method();
        //TODO: destruct
        return $result;
    }
}