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
    /** @var array */
    protected $matches;
    /** @var string|null */
    protected $regex = null;
    public function init(BotApi $bot, Update $update, InlineQuery $inlineQuery, array $matches = [])
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->inlineQuery = $inlineQuery;
        $this->matches = $matches;
    }
    public function getRegex()
    {
        return $this->regex;
    }
}