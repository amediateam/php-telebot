<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\InvalidArgumentException;

abstract class ArrayOfArrayOfKeyboardButton
{
    public static function fromResponse(BotApi $bot, $data)
    {
        return array_map(function ($arrayOfArrayOfKeyboardButton) use ($bot) {
            return ArrayOfKeyboardButton::fromResponse($bot, $arrayOfArrayOfKeyboardButton);
        }, $data);
    }


    public static function validate($data)
    {
        foreach ($data as $item) {
            if(!is_array($item)) return false;
            $result = ArrayOfKeyboardButton::validate($item);
            if (!$result) return false;
        }
        return true;
    }
}
