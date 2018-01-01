<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\Update;

class FilterChatCreated
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) &&
            (
                false !== (bool) $update->getEffectiveMessage()->getChannelChatCreated() ||
                false !== (bool) $update->getEffectiveMessage()->getGroupChatCreated() ||
                false !== (bool) $update->getEffectiveMessage()->getSupergroupChatCreated()
            );
    }
}