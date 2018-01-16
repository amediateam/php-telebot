<?php
namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractPreCheckoutQueryHandler;
use TelegramBot\Api\State\State;
use TelegramBot\Api\Types\Update;

class PreCheckoutQueryHandler extends BaseHandler
{
    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        if (!Filters::$preCheckoutQuery::filter($update)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        /** @var $instance AbstractPreCheckoutQueryHandler */
        $instance = $this->callback->getCallback();
        $instance->setState($state);
        $instance->init($dispatcher->getBot(), $update, $update->getPreCheckoutQuery());
        $method = $this->callback->getMethodToCall();
        $result = $instance->$method();
        //TODO: destruct
        return $result;
    }
}