<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterChosenInlineResult
{
    public static function filter(Update $update)
    {
        return $update->getChosenInlineResult() !== false;
    }
}