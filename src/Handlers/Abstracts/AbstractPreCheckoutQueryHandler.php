<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\InlineQuery;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\PreCheckoutQuery;
use TelegramBot\Api\Types\Update;

abstract class AbstractPreCheckoutQueryHandler extends BaseAbstract
{
    protected $update;
    protected $preCheckoutQuery;
    protected $bot;

    public function init(BotApi $bot, Update $update, PreCheckoutQuery $preCheckoutQuery)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->preCheckoutQuery = $preCheckoutQuery;
    }

    abstract public function handle();
}