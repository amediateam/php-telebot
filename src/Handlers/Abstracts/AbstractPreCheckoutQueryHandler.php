<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\PreCheckoutQuery;
use TelegramBot\Api\Types\Update;

abstract class AbstractPreCheckoutQueryHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var PreCheckoutQuery */
    protected $preCheckoutQuery;
    /** @var BotApi */
    protected $bot;

    public function init(BotApi $bot, Update $update, PreCheckoutQuery $preCheckoutQuery)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->preCheckoutQuery = $preCheckoutQuery;
    }
}