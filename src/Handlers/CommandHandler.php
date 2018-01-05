<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

class CommandHandler extends BaseHandler
{
    protected $command;
    protected $editedUpdates;

    public function __construct($command,
                                callable $callback,
                                $filters = null,
                                $editedUpdates = false)
    {
        $this->command = $command;
        $this->editedUpdates = $editedUpdates;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$command::filter($update)) {
            return false;
        } else if (!$this->editedUpdates && $update->isEdited()) {
            return false;
        }
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());
        if (!(strcmp(strtolower($command->getName()), strtolower($this->command)) === 0)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher)
    {
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());
        return $this->invokeArgs([$dispatcher->getBot(), $update, $update->getEffectiveMessage(), $command]);
    }
}