<?php

namespace TelegramBot\Api\Handlers;

use function call_user_func_array;
use function preg_match;
use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractRegexHandler;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\Update;

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

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!parent::checkUpdate($update, $state)) {
            return false;
        }
        return preg_match($this->regex, $update->getEffectiveMessage()->getText());
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        preg_match($this->regex, $update->getEffectiveMessage()->getText(), $matches);
        /** @var $instance AbstractRegexHandler */
        $instance = $this->callback->getCallback();
        $instance->setState($state);
        $instance->init($dispatcher->getBot(), $update, $update->getMessage(), $matches);
        $method = $this->callback->getMethodToCall();
        $result = $instance->$method();
        //TODO: destruct
        return $result;
    }
}