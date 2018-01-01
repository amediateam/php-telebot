<?php
namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\InvalidArgumentException;

abstract class ArrayOfArrayOfPhotoSize
{
    public static function fromResponse($data)
    {
        return array_map(function ($arrayOfPhotoSize) {
            return ArrayOfPhotoSize::fromResponse($arrayOfPhotoSize);
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
