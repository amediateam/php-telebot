<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\Update;

class FilterNewChatMembers
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) && false !== $update->getEffectiveMessage()->getNewChatMembers();
    }
}