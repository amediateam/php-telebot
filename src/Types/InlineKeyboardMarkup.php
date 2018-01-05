<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class InlineKeyboardMarkup extends Types\InlineKeyboardMarkup
{
    public function reverseKeyboard()
    {
        $this->setInlineKeyboard(array_map("array_reverse", $this->getInlineKeyboard()));
    }
}
