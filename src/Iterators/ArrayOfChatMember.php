<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\ChatMember;

abstract class ArrayOfChatMember
{
    public static function fromResponse($data)
    {
        $array = [];
        foreach ($data as $userItem) {
            $array[] = ChatMember::fromResponse($userItem);
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
