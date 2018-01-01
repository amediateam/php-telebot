<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\Update;

class FilterNewChatTitle
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) && false !== (bool) $update->getEffectiveMessage()->getNewChatTitle();
    }
}