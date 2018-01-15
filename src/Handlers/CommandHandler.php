<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractCommandHandler;
use TelegramBot\Api\State;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

class CommandHandler extends BaseHandler
{
    protected $command;
    protected $editedUpdates;
    protected $filters;

    public function __construct($command,
                                AbstractCommandHandler $callback,
                                array $filters = [],
                                $editedUpdates = false)
    {
        $this->command = $command;
        $this->editedUpdates = $editedUpdates;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$command::filter($update)) {
            return false;
        }
        foreach ($this->filters as $filter) {
            if (!$filter::filter($update)) return false;
        }
        if (!$this->editedUpdates && $update->isEdited()) {
            return false;
        }
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());
        if (!(strcmp(strtolower($command->getName()), strtolower($this->command)) === 0)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        $command = TextCommand::parse($update->getEffectiveMessage()->getText());

        /** @var $instance AbstractCommandHandler */
        $instance = clone $this->callback;
        $instance->setState($state);
        $instance->init($dispatcher->getBot(), $update, $update->getEffectiveMessage());
        $result = $instance->handle($command);
        //TODO: destruct
        return $result;
    }
}