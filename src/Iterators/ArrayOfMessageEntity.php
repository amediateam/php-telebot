<?php
/**
 * Created by PhpStorm.
 * User: iGusev
 * Date: 13/04/16
 * Time: 04:16
 */

namespace TelegramBot\Api\Iterators;
use TelegramBot\Api\InvalidArgumentException;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\MessageEntity;

abstract class ArrayOfMessageEntity
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfMessageEntity = [];
        foreach ($data as $messageEntity) {
            $arrayOfMessageEntity[] = MessageEntity::fromResponse($bot, $messageEntity);
        }

        return $arrayOfMessageEntity;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof MessageEntity ? true : MessageEntity::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
