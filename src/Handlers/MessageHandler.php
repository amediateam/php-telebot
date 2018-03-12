<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters;
use TelegramBot\Api\Types\Update;
use function call_user_func_array;

class MessageHandler extends BaseHandler
{
    protected $filters;
    protected $messageUpdates;
    protected $channelPostUpdates;
    protected $editedUpdates;
    protected $commandUpdates;

    public function __construct(callable $callback,
                                array $filters = null,
                                $commandUpdates = false,
                                $messageUpdates = true,
                                $editedUpdates = false,
                                $channelPostUpdates = true)
    {
        parent::__construct($callback);
        $this->filters = $filters;
        $this->messageUpdates = $messageUpdates;
        $this->editedUpdates = $editedUpdates;
        $this->channelPostUpdates = $channelPostUpdates;
        $this->commandUpdates = $commandUpdates;
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::message()($update)) {
            return false;
        } else if (Filters::statusUpdate()($update)) {
            return false;
        } else if (!Filters::filter($update, $this->filters)) {
            return false;
        } else if (!$this->editedUpdates && $update->isEdited()) {
            return false;
        } else if (!$this->messageUpdates && ($update->getMessage() || $update->getEditedMessage())) {
            return false;
        } else if (!$this->channelPostUpdates && $update->isChannelPost()) {
            return false;
        } else if (!$this->commandUpdates && Filters::text()($update) && substr($update->getMessage()->getText(), 0, 1) == '/') {
            return false;
        }
        return true;
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        return call_user_func_array($this->callback, $this->getCallArguments($botApi, $update));
    }

    public function getCallArguments(BotApi $botApi, Update $update)
    {
        return [$botApi, $update, $update->getEffectiveMessage()];
    }
}