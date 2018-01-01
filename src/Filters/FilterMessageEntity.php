<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterMessageEntity
{
    public static function filter(Update $update, $entity)
    {
        if (!FilterMessage::filter($update)) return false;
        foreach ($update->getEffectiveMessage()->getEntities() as $e) {
            if ($e['type'] == $entity) {
                return true;
            }
        }
        return false;
    }
}