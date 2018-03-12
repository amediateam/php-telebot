<?php

namespace TelegramBot\Api\Entities\ReplyMarkup;

use TelegramBot\Api\Entities\BaseEntity;

class InlineKeyboardMarkup extends BaseEntity
{
    protected $inline_keyboard = [];

    public static function createWithData(array $inline_keyboard)
    {
        return self::create()->setInlineKeyboard($inline_keyboard);
    }

    /**
     * @param array $inline_keyboard
     * @return InlineKeyboardMarkup
     */
    public function setInlineKeyboard(array $inline_keyboard): InlineKeyboardMarkup
    {
        foreach ($inline_keyboard as &$row) {
            foreach ($row as &$keyboard) {
                if ($keyboard instanceof InlineKeyboardButton) {
                    $keyboard = $keyboard->toArray();
                }
            }
        }
        $this->inline_keyboard = $inline_keyboard;
        return $this;
    }
}