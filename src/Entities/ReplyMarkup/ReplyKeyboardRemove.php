<?php

namespace TelegramBot\Api\Entities\ReplyMarkup;

use TelegramBot\Api\Entities\BaseEntity;

class ReplyKeyboardRemove extends BaseEntity
{
    protected $remove_keyboard = true;
    protected $selective;

    public static function selective()
    {
        return self::create()->setSelective(true);
    }

    /**
     * @param mixed $selective
     * @return ReplyKeyboardRemove
     */
    public function setSelective($selective)
    {
        $this->selective = $selective;
        return $this;
    }

    /**
     * @param bool $remove_keyboard
     * @return ReplyKeyboardRemove
     */
    public function setRemoveKeyboard(bool $remove_keyboard): ReplyKeyboardRemove
    {
        $this->remove_keyboard = $remove_keyboard;
        return $this;
    }
}