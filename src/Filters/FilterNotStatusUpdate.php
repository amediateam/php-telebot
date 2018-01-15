<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterNotStatusUpdate
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) && !FilterStatusUpdate::filter($update);
    }
}