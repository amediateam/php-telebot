<?php
namespace TelegramBot\Api\Handlers;
use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractInlineQueryHandler;
use TelegramBot\Api\Types\Update;

class InlineQueryHandler extends BaseHandler
{
    protected $regex;

    public function __construct(HandlerCallback $callback)
    {
        parent::__construct($callback);
        $handler = $callback->getCallback(false);
        /** @var $handler AbstractInlineQueryHandler */
        $this->regex = $handler->getRegex();
    }

    public function checkUpdate(Update $update)
    {
        if (!Filters::$inlineQuery::filter($update)) {
            return false;
        }
        if (!is_null($this->regex) && !preg_match($this->regex, $update->getInlineQuery()->getQuery())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(BotApi $botApi, Update $update)
    {
        $matches = [];
        if (!is_null($this->regex)) {
            preg_match($this->regex, $update->getInlineQuery()->getQuery(), $matches);
        }
        /** @var $instance AbstractInlineQueryHandler */
        $instance = $this->callback->getCallback();
        $instance->init($botApi, $update, $update->getInlineQuery(), $matches);
        $method = $this->callback->getMethodToCall();
        $result = $instance->callMethod($method);
        //TODO: destruct
        return $result;
    }
}