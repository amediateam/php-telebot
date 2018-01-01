<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterCallbackQuery
{
    public static function filter(Update $update)
    {
        return $update->getCallbackQuery() !== false;
    }
}