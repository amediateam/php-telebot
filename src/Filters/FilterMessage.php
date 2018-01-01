<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterMessage
{
    public static function filter(Update $update)
    {
        return $update->getEffectiveMessage() !== false;
    }
}