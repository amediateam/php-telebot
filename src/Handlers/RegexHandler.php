<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Handlers\Abstracts\AbstractRegexHandler;
use TelegramBot\Api\Types\Update;
use function preg_match;

class RegexHandler extends MessageHandler
{
    private $regex;
    private $matches = [];

    public function __construct(
        callable $callback,
        $regex,
        array $filters = null,
        bool $commandUpdates = true,
        bool $messageUpdates = true,
        bool $editedUpdates = false,
        bool $channelPostUpdates = true
    )
    {
        $this->regex = $regex;
        parent::__construct($callback, $filters, $commandUpdates, $messageUpdates, $editedUpdates, $channelPostUpdates);
    }

    public function checkUpdate(Update $update)
    {
        if (!parent::checkUpdate($update)) {
            return false;
        }
        return is_null($this->regex) || preg_match($this->regex, $update->getEffectiveMessage()->getText(), $this->matches);
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        return call_user_func_array($this->callback, $this->getCallArguments($botApi, $update));
    }

    public function getCallArguments(BotApi $botApi, Update $update)
    {
        return [$botApi, $update, $update->getEffectiveMessage(), $this->matches];
    }
}