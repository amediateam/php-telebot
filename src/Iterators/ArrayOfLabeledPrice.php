<?php
namespace TelegramBot\Api\Iterators;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\LabeledPrice;
use TelegramBot\Api\InvalidArgumentException;

abstract class ArrayOfLabeledPrice
{
    public static function fromResponse(BotApi $bot, $data)
    {
        $array = [];
        foreach ($data as $labeledPrice) {
            $array[] = LabeledPrice::fromResponse($bot, $labeledPrice);
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
