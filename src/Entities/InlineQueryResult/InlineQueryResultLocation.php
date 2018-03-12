<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultLocation extends InlineQueryResult
{
    /** @var string */
    protected $type = 'location';
    /** @var string */
    protected $id;
    /** @var float */
    protected $latitude;
    /** @var float */
    protected $longitude;
    /** @var string */
    protected $title;
    /** @var integer */
    protected $live_period;
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
     * @return InlineQueryResultLocation
     */
    public function setId(string $id): InlineQueryResultLocation
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param float $latitude
     * @return InlineQueryResultLocation
     */
    public function setLatitude(float $latitude): InlineQueryResultLocation
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @param float $longitude
     * @return InlineQueryResultLocation
     */
    public function setLongitude(float $longitude): InlineQueryResultLocation
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultLocation
     */
    public function setTitle(string $title): InlineQueryResultLocation
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param int $live_period
     * @return InlineQueryResultLocation
     */
    public function setLivePeriod(int $live_period): InlineQueryResultLocation
    {
        $this->live_period = $live_period;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultLocation
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultLocation
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultLocation
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultLocation
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultLocation
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultLocation
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param int $thumb_width
     * @return InlineQueryResultLocation
     */
    public function setThumbWidth(int $thumb_width): InlineQueryResultLocation
    {
        $this->thumb_width = $thumb_width;
        return $this;
    }

    /**
     * @param int $thumb_height
     * @return InlineQueryResultLocation
     */
    public function setThumbHeight(int $thumb_height): InlineQueryResultLocation
    {
        $this->thumb_height = $thumb_height;
        return $this;
    }
}