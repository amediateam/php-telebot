<?php

namespace TelegramBot\Api\Handlers\Abstracts;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\ChosenInlineResult;
use TelegramBot\Api\Types\Update;

abstract class AbstractChosenInlineResultHandler extends BaseAbstract
{
    /** @var Update */
    protected $update;
    /** @var ChosenInlineResult */
    protected $chosenInlineResult;
    /** @var BotApi */
    protected $bot;

    public function init(BotApi $bot, Update $update, ChosenInlineResult $chosenInlineResult)
    {
        $this->bot = $bot;
        $this->update = $update;
        $this->chosenInlineResult = $chosenInlineResult;
    }

    abstract public function handle(array $matches = []);
}