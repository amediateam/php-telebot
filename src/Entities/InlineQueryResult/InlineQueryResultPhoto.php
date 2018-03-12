<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultPhoto extends InlineQueryResult
{
    /** @var string */
    protected $type = 'photo';
    /** @var string */
    protected $id;
    /** @var string */
    protected $photo_url;
    /** @var string */
    protected $thumb_url;
    /** @var string */
    protected $photo_width;
    /** @var string */
    protected $photo_height;
    /** @var string */
    protected $title;
    /** @var string */
    protected $description;
    /** @var string */
    protected $caption;
    /** @var string */
    protected $parse_mode;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;

    /**
     * @param string $id
     * @return InlineQueryResultPhoto
     */
    public function setId(string $id): InlineQueryResultPhoto
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $photo_url
     * @return InlineQueryResultPhoto
     */
    public function setPhotoUrl(string $photo_url): InlineQueryResultPhoto
    {
        $this->photo_url = $photo_url;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultPhoto
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultPhoto
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param string $photo_width
     * @return InlineQueryResultPhoto
     */
    public function setPhotoWidth(string $photo_width): InlineQueryResultPhoto
    {
        $this->photo_width = $photo_width;
        return $this;
    }

    /**
     * @param string $photo_height
     * @return InlineQueryResultPhoto
     */
    public function setPhotoHeight(string $photo_height): InlineQueryResultPhoto
    {
        $this->photo_height = $photo_height;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultPhoto
     */
    public function setTitle(string $title): InlineQueryResultPhoto
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $description
     * @return InlineQueryResultPhoto
     */
    public function setDescription(string $description): InlineQueryResultPhoto
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultPhoto
     */
    public function setCaption(string $caption): InlineQueryResultPhoto
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultPhoto
     */
    public function setParseMode(string $parse_mode): InlineQueryResultPhoto
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultPhoto
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultPhoto
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultPhoto
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultPhoto
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}