<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\Update;

class FilterMigrate
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) &&
            (
                false !== $update->getEffectiveMessage()->getMigrateFromChatId() ||
                false !== $update->getEffectiveMessage()->getMigrateToChatId()
            );
    }
}