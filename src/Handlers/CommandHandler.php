<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

class CommandHandler extends MessageHandler
{
    protected $command;
    protected $parsedCommand;

    public function __construct($command, callable $callback,
                                $filters = null,
                                bool $messageUpdates = true,
                                bool $editedUpdates = false,
                                bool $channelPostUpdates = true)
    {
        $this->command = $command;
        parent::__construct($callback, $filters, true, $messageUpdates, $editedUpdates, $channelPostUpdates);
    }

    public function checkUpdate(Update $update)
    {
        if (!parent::checkUpdate($update)) {
            return false;
        }
        if (!Filters::$command::filter($update)) {
            return false;
        }
        $this->parsedCommand = TextCommand::parse($update->getEffectiveMessage()->getText());
        if (!(strcmp(strtolower($this->parsedCommand->getName()), strtolower($this->command)) === 0)) {
            return false;
        }
        return true;
    }

    /**
     * @param BotApi $botApi
     * @param Update $update
     * @return mixed
     * @throws \TelegramBot\Api\InvalidCallbackException
     */
    public function handleUpdate(BotApi $botApi, Update $update)
    {
        return call_user_func_array($this->callback, $this->getCallArguments($botApi, $update));
    }

    public function getCallArguments(BotApi $botApi, Update $update)
    {
        return [$botApi, $update, $update->getEffectiveMessage(), $this->parsedCommand];
    }
}