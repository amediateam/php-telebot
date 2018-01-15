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

    public function init(BotApi $bot, Update $update, CallbackQuery $callbackQuery)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->callbackQuery = $callbackQuery;
    }

    abstract public function handle(array $matches = []);
}