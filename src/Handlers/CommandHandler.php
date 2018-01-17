<?php
namespace TelegramBot\Api\Handlers;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

class CommandHandler extends MessageHandler
{
    protected $command;

    public function __construct(callable $callback,
                                $filters = null,
                                bool $messageUpdates = true,
                                bool $editedUpdates = false,
                                bool $channelPostUpdates = true)
    {
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
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());
        if (!(strcmp(strtolower($command->getName()), strtolower($this->command)) === 0)) {
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
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());
        return call_user_func_array($this->callback, [$botApi, $update, $update->getEffectiveMessage(), $command]);
    }
}