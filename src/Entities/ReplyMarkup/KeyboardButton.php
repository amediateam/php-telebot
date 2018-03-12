<?php

namespace TelegramBot\Api\Entities\ReplyMarkup;

use TelegramBot\Api\Entities\BaseEntity;

class KeyboardButton extends BaseEntity
{
    /** @var string */
    protected $text;
    /** @var bool */
    protected $request_contact;
    /** @var bool */
    protected $request_location;

    public static function withRequestContact($text)
    {
        return self::withPlainText($text)->setRequestContact(true);
    }

    /**
     * @param bool $request_contact
     * @return KeyboardButton
     */
    public function setRequestContact(bool $request_contact): KeyboardButton
    {
        $this->request_contact = $request_contact;
        return $this;
    }

    public static function withPlainText($text)
    {
        return self::create()->setText($text);
    }

    /**
     * @param string $text
     * @return KeyboardButton
     */
    public function setText(string $text): KeyboardButton
    {
        $this->text = $text;
        return $this;
    }

    public static function withRequestLocation($text)
    {
        return self::withPlainText($text)->setRequestLocation(true);
    }

    /**
     * @param bool $request_location
     * @return KeyboardButton
     */
    public function setRequestLocation(bool $request_location): KeyboardButton
    {
        $this->request_location = $request_location;
        return $this;
    }
}