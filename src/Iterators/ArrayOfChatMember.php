<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\ChatMember;

abstract class ArrayOfChatMember
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $array = [];
        foreach ($data as $userItem) {
            try {
                $array[] = ChatMember::fromResponse($bot, $userItem);
            } catch (InvalidArgumentException $e) {
            }
        }

        return $array;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof ChatMember ? true : ChatMember::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
