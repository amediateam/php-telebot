<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

class CommandHandler extends MessageHandler
{
    protected $command;
    protected $parsedCommand;

    /**
     * CommandHandler constructor.
     * @param null|array $command
     * @param callable $callback
     * @param null|array $filters
     * @param bool $messageUpdates
     * @param bool $editedUpdates
     * @param bool $channelPostUpdates
     */
    public function __construct($command = null, callable $callback,
                                $filters = null,
                                bool $messageUpdates = true,
                                bool $editedUpdates = false,
                                bool $channelPostUpdates = true)
    {
        if (!is_array($command)) {
            $command = [$command];
        }
        $this->command = $command;
        parent::__construct($callback, $filters, true, $messageUpdates, $editedUpdates, $channelPostUpdates);
    }

    public function checkUpdate(Update $update)
    {
        if (!parent::checkUpdate($update)) {
            return false;
        }
        if (!Filters::command()($update)) {
            return false;
        }
        $this->parsedCommand = TextCommand::parse($update->getEffectiveMessage()->getText());
        foreach ($this->command as $cmd) {
            if (strcmp(strtolower($this->parsedCommand->getName()), strtolower($cmd)) === 0) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param BotApi $botApi
     * @param Update $update
     * @return mixed
     * @throws \TelegramBot\Api\Exceptions\InvalidCallbackException
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