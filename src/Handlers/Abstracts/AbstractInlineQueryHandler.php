<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\InlineQuery;
use TelegramBot\Api\Types\Update;

abstract class AbstractInlineQueryHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var InlineQuery */
    protected $inlineQuery;
    /** @var BotApi */
    protected $bot;

    public function init(BotApi $bot, Update $update, InlineQuery $inlineQuery)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->inlineQuery = $inlineQuery;
    }

    abstract public function handle(array $matches = []);
}