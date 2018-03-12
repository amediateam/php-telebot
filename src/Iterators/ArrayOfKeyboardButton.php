<?php

namespace TelegramBot\Api\Iterators;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\KeyboardButton;

abstract class ArrayOfKeyboardButton
{
    /**
     * @param $data
     * @return array
     * @throws \TelegramBot\Api\Exceptions\InvalidArgumentException
     */
    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfKeyboardButton = [];
        foreach ($data as $keyboardButton) {
            if($keyboardButton instanceof KeyboardButton){
                $arrayOfKeyboardButton[] = $keyboardButton;
            } else {
                $arrayOfKeyboardButton[] = KeyboardButton::fromResponse($bot, $keyboardButton);
            }
        }

        return $arrayOfKeyboardButton;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof KeyboardButton ? true : KeyboardButton::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
