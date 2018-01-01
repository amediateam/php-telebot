<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Sticker;

abstract class ArrayOfSticker
{
    public static function fromResponse(BotApi $botApi, $data)
    {
        $arrayOfSticker = [];
        foreach ($data as $sticker) {
            $arrayOfSticker[] = Sticker::fromResponse($botApi, $sticker);
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
