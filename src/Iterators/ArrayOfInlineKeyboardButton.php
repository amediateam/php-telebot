<?php

namespace TelegramBot\Api\Iterators;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\InlineKeyboardButton;

abstract class ArrayOfInlineKeyboardButton
{
    /**
     * @param BotApi $bot
     * @param array $data
     * @return array
     * @throws InvalidArgumentException
     */
    public static function fromResponse(BotApi $bot, array $data)
    {
        $array = [];
        foreach ($data as $inlineKeyboardButton) {
            if($inlineKeyboardButton instanceof InlineKeyboardButton){
                $array[] = $inlineKeyboardButton;
            } else {
                $array[] = InlineKeyboardButton::fromResponse($bot, $inlineKeyboardButton);
            }
        }
        return $array;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof InlineKeyboardButton ? true : InlineKeyboardButton::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
