<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Update;

abstract class ArrayOfUpdate
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfUpdates = [];
        foreach ($data as $update) {
            $arrayOfUpdates[] = Update::fromResponse($bot, $update);
        }

        return $arrayOfUpdates;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof Update ? true : Update::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
