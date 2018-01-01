<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterForwarded
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) && false !== $update->getEffectiveMessage()->getForwardDate();
    }
}