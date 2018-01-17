<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Handlers\Abstracts\AbstractRegexHandler;
use TelegramBot\Api\Types\Update;
use function preg_match;

class RegexHandler extends MessageHandler
{
    private $regex;

    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
        /** @var $handler AbstractRegexHandler */
        $handler = $callback->getCallback(false);
        $this->regex = $handler->getRegex();
    }

    public function checkUpdate(Update $update)
    {
        if (!parent::checkUpdate($update)) {
            return false;
        }
        return is_null($this->regex) || preg_match($this->regex, $update->getEffectiveMessage()->getText());
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        preg_match($this->regex, $update->getEffectiveMessage()->getText(), $matches);
        /** @var $instance AbstractRegexHandler */
        $instance = $this->callback->getCallback();
        $instance->init($botApi, $update, $update->getMessage(), $matches);
        $method = $this->callback->getMethodToCall();
        $result = $instance->callMethod($method);
        //TODO: destruct
        return $result;
    }
}