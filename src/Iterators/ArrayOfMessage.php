<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\InvalidArgumentException;

abstract class ArrayOfMessage
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfMessage = [];
        foreach ($data as $message) {
            $arrayOfMessage[] = Message::fromResponse($bot, $message);
        }

        return $arrayOfMessage;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof Message ? true : Message::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
