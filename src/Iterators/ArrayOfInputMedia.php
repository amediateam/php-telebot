<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\InputMediaPhoto;
use TelegramBot\Api\Types\InputMediaVideo;

abstract class ArrayOfInputMedia
{
    /**
     * @param BotApi $botApi
     * @param $data
     * @return InputMediaPhoto[]|InputMediaVideo[]
     * @throws \TelegramBot\Api\InvalidArgumentException
     */
    public static function fromResponse(BotApi $botApi, $data)
    {
        $arrayOfInputMedia = [];
        foreach ($data as $inputMedia) {
            if (is_array($inputMedia) && isset($inputMedia['type'])) {
                if ($inputMedia['type'] == 'photo') {
                    $arrayOfInputMedia[] = InputMediaPhoto::fromResponse($botApi, $inputMedia);
                } else if ($inputMedia['type'] == 'video') {
                    $arrayOfInputMedia[] = InputMediaVideo::fromResponse($botApi, $inputMedia);
                }
            } else if ($inputMedia instanceof InputMediaVideo || $inputMedia instanceof InputMediaPhoto) {
                $arrayOfInputMedia[] = $inputMedia;
            }
        }
        return $arrayOfInputMedia;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                if($item instanceof InputMediaVideo || $item instanceof InputMediaPhoto){
                    $result = true;
                } else if (isset($data['type']) && $data['type'] == 'photo') {
                    $result = InputMediaPhoto::validate($item);
                } else if (isset($data['type']) && $data['type'] == 'video') {
                    $result = InputMediaVideo::validate($item);
                } else {
                    $result = false;
                }
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
