<?php

namespace TelegramBot\Api\Entities\InputMessageContent;
class InputContactMessageContent extends InputMessageContent
{
    /** @var string */
    protected $phone_number;
    /** @var string */
    protected $first_name;
    /** @var string */
    protected $last_name;

    public static function createWithData($phone_number, $first_name, $last_name)
    {
        return self::create()->setPhoneNumber($phone_number)->setFirstName($first_name)->setLastName($last_name);
    }

    /**
     * @param string $last_name
     * @return InputContactMessageContent
     */
    public function setLastName(string $last_name): InputContactMessageContent
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param string $first_name
     * @return InputContactMessageContent
     */
    public function setFirstName(string $first_name): InputContactMessageContent
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @param string $phone_number
     * @return InputContactMessageContent
     */
    public function setPhoneNumber(string $phone_number): InputContactMessageContent
    {
        $this->phone_number = $phone_number;
        return $this;
    }
}