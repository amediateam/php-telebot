<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;

abstract class ArrayOfString
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfString = [];
        foreach ($data as $item) {
            $arrayOfString[] = (string)$item;
        }
        return $arrayOfString;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            $result = is_string($item);
            if (!$result) return false;
        }
        return true;
    }
}
