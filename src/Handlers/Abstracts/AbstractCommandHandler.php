<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\InvalidCallbackException;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\TextCommand;
use TelegramBot\Api\Types\Update;

abstract class AbstractCommandHandler extends AbstractMessageHandler
{
    /** @var TextCommand */
    protected $command;
    /** @var string */
    protected $commandText;
    /** @var bool */
    protected $commandUpdates = true;

    /**
     * @param BotApi $bot
     * @param Update $update
     * @param Message $message
     * @param TextCommand|null $command
     * @throws InvalidCallbackException
     */
    public function init(BotApi $bot, Update $update, Message $message, TextCommand $command = null)
    {
        if (empty($this->commandText)) {
            throw new InvalidCallbackException("Command text is empty!");
        }
        if ($command === null) {
            $command = new TextCommand(null, [], null);
        }
        $this->command = $command;
        parent::init($bot, $update, $message);
    }

    public function getCommandText()
    {
        return $this->commandText;
    }
}