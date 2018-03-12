<?php
namespace TelegramBot\Api\Iterators;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\LabeledPrice;

abstract class ArrayOfLabeledPrice
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $array = [];
        foreach ($data as $labeledPrice) {
            try {
                $array[] = LabeledPrice::fromResponse($bot, $labeledPrice);
            } catch (InvalidArgumentException $e) {
            }
        }

        return $array;
    }

    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = $item instanceof LabeledPrice ? true : LabeledPrice::validate($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
