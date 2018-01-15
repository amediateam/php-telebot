<?php

namespace TelegramBot\Api\Handlers;

use ReflectionClass;
use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractCallbackQueryHandler;
use TelegramBot\Api\State;
use TelegramBot\Api\Types\Update;

class CallbackQueryHandler extends BaseHandler
{
    protected $regex;

    public function __construct(AbstractCallbackQueryHandler $callback, $regex = null)
    {
        $this->regex = $regex;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$callbackQuery::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getCallbackQuery()->getData())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getCallbackQuery()->getData(), $matches);
        }
        /** @var $instance AbstractCallbackQueryHandler */
        $instance = clone $this->callback;
        $instance->setState($state);
        $instance->init($dispatcher->getBot(), $update, $update->getCallbackQuery());
        $result = $instance->handle($matches);
        //TODO: destruct
        return $result;
    }
}