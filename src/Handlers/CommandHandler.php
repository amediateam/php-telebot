<?php

namespace TelegramBot\Api\Handlers;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractCommandHandler;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

class CommandHandler extends MessageHandler
{
    protected $command;
    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
        $handler = $callback->getCallback(false);
        /** @var $handler AbstractCommandHandler */
        $this->command = $handler->getCommandText();
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
     * @param State|null $state
     * @return mixed
     * @throws \TelegramBot\Api\InvalidCallbackException
     */
    public function handleUpdate(BotApi $botApi, Update $update)
    {
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());
        /** @var $instance AbstractCommandHandler */
        $instance = $this->callback->getCallback();
        $instance->init($botApi, $update, $update->getEffectiveMessage(), $command);
        $method = $this->callback->getMethodToCall();
        $result = $instance->callMethod($method);
        //TODO: destruct
        return $result;
    }
}