<?php

namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractChosenInlineResultHandler;
use TelegramBot\Api\Handlers\Abstracts\BaseAbstract;
use TelegramBot\Api\State;
use TelegramBot\Api\Types\Update;

class ChosenInlineResultHandler extends BaseHandler
{
    protected $regex;

    public function __construct(AbstractChosenInlineResultHandler $callback, $regex = null)
    {
        $this->regex = $regex;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$chosenInlineResult::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getChosenInlineResult()->getQuery())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getChosenInlineResult()->getQuery(), $matches);
        }
        /** @var $instance AbstractChosenInlineResultHandler */
        $instance = clone $this->callback;
        $instance->init($dispatcher->getBot(), $update, $update->getChosenInlineResult());
        $result = $instance->handle($matches);
        //TODO: destruct
        return $result;
    }
}