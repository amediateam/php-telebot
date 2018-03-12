<?php

namespace TelegramBot\Api\Entities\ReplyMarkup;

use TelegramBot\Api\Entities\BaseEntity;

class ReplyKeyboardMarkup extends BaseEntity
{
    /** @var KeyboardButton[][] */
    protected $keyboard = [];
    /** @var bool */
    protected $resize_keyboard;
    /** @var bool */
    protected $one_time_keyboard;
    /** @var bool */
    protected $selective;

    public static function createWithData($keyboard, $resize_keyboard = true, $one_time_keyboard = false, $selective = false)
    {
        return self::create()->setKeyboard($keyboard)
            ->setResizeKeyboard($resize_keyboard)
            ->setOneTimeKeyboard($one_time_keyboard)
            ->setSelective($selective);
    }

    /**
     * @param KeyboardButton[][] $keyboard
     * @return ReplyKeyboardMarkup
     */
    public function setKeyboard(array $keyboard): ReplyKeyboardMarkup
    {
        foreach ($keyboard as &$row) {
            foreach ($row as &$button) {
                if ($button instanceof KeyboardButton) {
                    $button = $button->toArray();
                }
            }
        }
        $this->keyboard = $keyboard;
        return $this;
    }

    /**
     * @param bool $resize_keyboard
     * @return ReplyKeyboardMarkup
     */
    public function setResizeKeyboard(bool $resize_keyboard): ReplyKeyboardMarkup
    {
        $this->resize_keyboard = $resize_keyboard;
        return $this;
    }

    /**
     * @param bool $one_time_keyboard
     * @return ReplyKeyboardMarkup
     */
    public function setOneTimeKeyboard(bool $one_time_keyboard): ReplyKeyboardMarkup
    {
        $this->one_time_keyboard = $one_time_keyboard;
        return $this;
    }

    /**
     * @param bool $selective
     * @return ReplyKeyboardMarkup
     */
    public function setSelective(bool $selective): ReplyKeyboardMarkup
    {
        $this->selective = $selective;
        return $this;
    }

    public function reverseKeyboard()
    {
        $this->setKeyboard(array_map("array_reverse", $this->keyboard));
        return $this;
    }
}