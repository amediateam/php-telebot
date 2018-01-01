<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\Update;

class FilterChatChannel
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) && $update->getEffectiveMessage()->getChat()->getType() == Chat::TYPE_CHANNEL;
    }
}