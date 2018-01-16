<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
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

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!parent::checkUpdate($update, $state)) {
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
     * @param Update $update
     * @param Dispatcher $dispatcher
     * @param State|null $state
     * @return mixed
     * @throws \TelegramBot\Api\InvalidCallbackException
     */
    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());

        /** @var $instance AbstractCommandHandler */
        $instance = $this->callback->getCallback();
        $instance->setState($state);

        $instance->init($dispatcher->getBot(), $update, $update->getEffectiveMessage(), $command);
        $method = $this->callback->getMethodToCall();
        $result = $instance->$method();
        //TODO: destruct
        return $result;
    }
}