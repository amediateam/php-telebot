<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterPreCheckoutQuery
{
    public static function filter(Update $update)
    {
        return $update->getPreCheckoutQuery() !== false;
    }
}