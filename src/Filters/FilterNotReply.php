<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterNotReply
{
    public static function filter(Update $update)
    {
        return FilterMessage::filter($update) && false == $update->getEffectiveMessage()->getReplyToMessage();
    }
}