<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterInlineQuery
{
    public static function filter(Update $update)
    {
        return $update->getInlineQuery() !== false;
    }
}