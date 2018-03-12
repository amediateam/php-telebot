<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultMpeg4Gif extends InlineQueryResult
{
    /** @var string */
    protected $type = 'mpeg4_gif';
    /** @var string */
    protected $id;
    /** @var string */
    protected $mpeg4_url;
    /** @var int */
    protected $mpeg4_width;
    /** @var int */
    protected $mpeg4_height;
    /** @var int */
    protected $mpeg4_duration;
    /** @var string */
    protected $thumb_url;
    /** @var string */
    protected $url;
    /** @var string */
    protected $title;
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
     * @return InlineQueryResultMpeg4Gif
     */
    public function setId(string $id): InlineQueryResultMpeg4Gif
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $mpeg4_url
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Url(string $mpeg4_url): InlineQueryResultMpeg4Gif
    {
        $this->mpeg4_url = $mpeg4_url;
        return $this;
    }

    /**
     * @param int $mpeg4_width
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Width(int $mpeg4_width): InlineQueryResultMpeg4Gif
    {
        $this->mpeg4_width = $mpeg4_width;
        return $this;
    }

    /**
     * @param int $mpeg4_height
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Height(int $mpeg4_height): InlineQueryResultMpeg4Gif
    {
        $this->mpeg4_height = $mpeg4_height;
        return $this;
    }

    /**
     * @param int $mpeg4_duration
     * @return InlineQueryResultMpeg4Gif
     */
    public function setMpeg4Duration(int $mpeg4_duration): InlineQueryResultMpeg4Gif
    {
        $this->mpeg4_duration = $mpeg4_duration;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultMpeg4Gif
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultMpeg4Gif
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param string $url
     * @return InlineQueryResultMpeg4Gif
     */
    public function setUrl(string $url): InlineQueryResultMpeg4Gif
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultMpeg4Gif
     */
    public function setTitle(string $title): InlineQueryResultMpeg4Gif
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultMpeg4Gif
     */
    public function setCaption(string $caption): InlineQueryResultMpeg4Gif
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultMpeg4Gif
     */
    public function setParseMode(string $parse_mode): InlineQueryResultMpeg4Gif
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultMpeg4Gif
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultMpeg4Gif
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultMpeg4Gif
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultMpeg4Gif
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}