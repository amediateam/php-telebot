<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterPhoto
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) && $update->getEffectiveMessage()->getPhoto() !== false;
    }
}