<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\Sticker;

abstract class ArrayOfSticker
{
    public static function fromResponse(BotApi $botApi, $data)
    {
        $arrayOfSticker = [];
        foreach ($data as $sticker) {
            try {
                $arrayOfSticker[] = Sticker::fromResponse($botApi, $sticker);
            } catch (InvalidArgumentException $e) {
            }
        }

        return $arrayOfSticker;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof Sticker ? true : Sticker::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
