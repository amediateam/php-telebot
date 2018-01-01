<?php
namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;

abstract class ArrayOfArrayOfInlineKeyboardButton
{
    public static function fromResponse(BotApi $bot, $data)
    {
        return array_map(function ($arrayOfInlineKeyboardButton) use ($bot) {
            return ArrayOfInlineKeyboardButton::fromResponse($bot, $arrayOfInlineKeyboardButton);
        }, $data);
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            if(!is_array($item)) return false;
            $result = ArrayOfInlineKeyboardButton::validate($item);
            if (!$result) return false;
        }
        return true;
    }
}
