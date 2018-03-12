<?php
namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;

abstract class ArrayOfArrayOfPhotoSize
{
    public static function fromResponse(BotApi $botApi, $data)
    {
        return array_map(function ($arrayOfPhotoSize) use ($botApi) {
            return ArrayOfPhotoSize::fromResponse($botApi, $arrayOfPhotoSize);
        }, $data);
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            if(!is_array($item)) return false;
            $result = ArrayOfPhotoSize::validate($item);
            if (!$result) return false;
        }
        return true;
    }
}
