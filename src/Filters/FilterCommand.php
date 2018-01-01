<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterCommand
{
    public static function filter(Update $update)
    {
        if (!FilterText::filter($update)) {
            return false;
        }
        return substr($update->getEffectiveMessage()->getText(), 0, 1) == '/';
    }
}