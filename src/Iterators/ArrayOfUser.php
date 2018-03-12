<?php
namespace TelegramBot\Api\Iterators;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\User;

abstract class ArrayOfUser
{
    public static function fromResponse(BotApi $botApi, $data)
    {
        $arrayOfPhotoSize = [];
        foreach ($data as $userItem) {
            try {
                $arrayOfPhotoSize[] = User::fromResponse($botApi, $userItem);
            } catch (InvalidArgumentException $e) {
            }
        }

        return $arrayOfPhotoSize;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof User ? true : User::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
