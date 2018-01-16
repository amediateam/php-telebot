<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\CallbackQuery;
use TelegramBot\Api\Types\Update;

abstract class AbstractCallbackQueryHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var CallbackQuery */
    protected $callbackQuery;
    /** @var BotApi */
    protected $bot;
    /** @var array */
    protected $matches;

    public function init(BotApi $bot, Update $update, CallbackQuery $callbackQuery, array $matches = [])
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->callbackQuery = $callbackQuery;
        $this->matches = $matches;
    }
}