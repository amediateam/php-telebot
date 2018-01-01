<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterText
{
    public static function filter(Update $update)
    {
        if (false === (bool) $update->getEffectiveMessage()) {
            return false;
        }
        return $update->getEffectiveMessage()->getText() !== false && !empty($update->getEffectiveMessage()->getText());
    }
}