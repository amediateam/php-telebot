<?php
namespace TelegramBot\Api\Handlers;

use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractPreCheckoutQueryHandler;
use TelegramBot\Api\Types\Update;

class PreCheckoutQueryHandler extends BaseHandler
{
    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$preCheckoutQuery::filter($update)) {
            return false;
        }
        return true;
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        /** @var $instance AbstractPreCheckoutQueryHandler */
        $instance = $this->callback->getCallback();
        $instance->init($botApi, $update, $update->getPreCheckoutQuery());
        $method = $this->callback->getMethodToCall();
        $result = $instance->callMethod($method);
        //TODO: destruct
        return $result;
    }
}