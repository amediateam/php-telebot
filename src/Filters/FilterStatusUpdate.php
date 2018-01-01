<?php

namespace TelegramBot\Api\Filters;

use TelegramBot\Api\Types\Update;

class FilterStatusUpdate
{
    public static function filter(Update $update)
    {
        if (!FilterMessage::filter($update)) return false;
        $result = false;
        $arr = [
            Filters::$newChatMembers,
            Filters::$leftChatMember,
            Filters::$chatCreated,
            Filters::$deleteChatPhoto,
            Filters::$newChatPhoto,
            Filters::$newChatTitle,
        ];
        foreach ($arr as $filter) {
            if ($filter::filter($update)) {
                return true;
            }
        }
        return $result;
    }
}