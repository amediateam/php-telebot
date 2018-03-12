<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultVenue extends InlineQueryResult
{
    /** @var string */
    protected $type = 'venue';
    /** @var string */
    protected $id;
    /** @var float */
    protected $latitude;
    /** @var float */
    protected $longitude;
    /** @var string */
    protected $title;
    /** @var string */
    protected $address;
    /** @var string */
    protected $foursquare_id;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;
    /** @var string */
    protected $thumb_url;
    /** @var int */
    protected $thumb_width;
    /** @var int */
    protected $thumb_height;

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
    }

    /**
     * @param string $foursquare_id
     */
    public function setFoursquareId(string $foursquare_id)
    {
        $this->foursquare_id = $foursquare_id;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup)
    {
        $this->reply_markup = $reply_markup;
    }

    /**
     * @param InputMessageContent $input_message_content
     */
    public function setInputMessageContent(InputMessageContent $input_message_content)
    {
        $this->input_message_content = $input_message_content;
    }

    /**
     * @param string $thumb_url
     */
    public function setThumbUrl(string $thumb_url)
    {
        $this->thumb_url = $thumb_url;
    }

    /**
     * @param int $thumb_width
     */
    public function setThumbWidth(int $thumb_width)
    {
        $this->thumb_width = $thumb_width;
    }

    /**
     * @param int $thumb_height
     */
    public function setThumbHeight(int $thumb_height)
    {
        $this->thumb_height = $thumb_height;
    }
}