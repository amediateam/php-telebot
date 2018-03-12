<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultContact extends InlineQueryResult
{
    /** @var string */
    protected $type = 'contact';
    /** @var string */
    protected $id;
    /** @var string */
    protected $phone_number;
    /** @var string */
    protected $first_name;
    /** @var string */
    protected $last_name;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;
    /** @var string */
    protected $thumb_url;
    /** @var integer */
    protected $thumb_width;
    /** @var integer */
    protected $thumb_height;

    /**
     * @param string $id
     * @return InlineQueryResultContact
     */
    public function setId(string $id): InlineQueryResultContact
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $phone_number
     * @return InlineQueryResultContact
     */
    public function setPhoneNumber(string $phone_number): InlineQueryResultContact
    {
        $this->phone_number = $phone_number;
        return $this;
    }

    /**
     * @param string $first_name
     * @return InlineQueryResultContact
     */
    public function setFirstName(string $first_name): InlineQueryResultContact
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @param string $last_name
     * @return InlineQueryResultContact
     */
    public function setLastName(string $last_name): InlineQueryResultContact
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultContact
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultContact
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultContact
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultContact
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultContact
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultContact
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param int $thumb_width
     * @return InlineQueryResultContact
     */
    public function setThumbWidth(int $thumb_width): InlineQueryResultContact
    {
        $this->thumb_width = $thumb_width;
        return $this;
    }

    /**
     * @param int $thumb_height
     * @return InlineQueryResultContact
     */
    public function setThumbHeight(int $thumb_height): InlineQueryResultContact
    {
        $this->thumb_height = $thumb_height;
        return $this;
    }
}