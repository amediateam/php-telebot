<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterSticker
{
    public static function filter(Update $update)
    {
        if(!FilterMessage::filter($update)){
            return false;
        }
        return $update->getEffectiveMessage()->getSticker() !== false;
    }
}