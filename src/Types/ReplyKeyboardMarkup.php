<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class ReplyKeyboardMarkup extends Types\ReplyKeyboardMarkup
{
    public function reverseKeyboard()
    {
        $this->setKeyboard(array_map("array_reverse", $this->getKeyboard()));
    }
}
