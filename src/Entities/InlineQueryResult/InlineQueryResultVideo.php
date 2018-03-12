<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultVideo extends InlineQueryResult
{
    /** @var string */
    protected $type = 'video';
    /** @var string */
    protected $id;
    /** @var string */
    protected $video_url;
    /** @var string */
    protected $mime_type;
    /** @var string */
    protected $thumb_url;
    /** @var string */
    protected $title;
    /** @var string */
    protected $caption;
    /** @var string */
    protected $parse_mode;
    /** @var int */
    protected $video_width;
    /** @var int */
    protected $video_height;
    /** @var int */
    protected $video_duration;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;

    /**
     * @param string $id
     * @return InlineQueryResultVideo
     */
    public function setId(string $id): InlineQueryResultVideo
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $video_url
     * @return InlineQueryResultVideo
     */
    public function setVideoUrl(string $video_url): InlineQueryResultVideo
    {
        $this->video_url = $video_url;
        return $this;
    }

    /**
     * @param string $mime_type
     * @return InlineQueryResultVideo
     */
    public function setMimeType(string $mime_type): InlineQueryResultVideo
    {
        $this->mime_type = $mime_type;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultVideo
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultVideo
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultVideo
     */
    public function setTitle(string $title): InlineQueryResultVideo
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultVideo
     */
    public function setCaption(string $caption): InlineQueryResultVideo
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultVideo
     */
    public function setParseMode(string $parse_mode): InlineQueryResultVideo
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param int $video_width
     * @return InlineQueryResultVideo
     */
    public function setVideoWidth(int $video_width): InlineQueryResultVideo
    {
        $this->video_width = $video_width;
        return $this;
    }

    /**
     * @param int $video_height
     * @return InlineQueryResultVideo
     */
    public function setVideoHeight(int $video_height): InlineQueryResultVideo
    {
        $this->video_height = $video_height;
        return $this;
    }

    /**
     * @param int $video_duration
     * @return InlineQueryResultVideo
     */
    public function setVideoDuration(int $video_duration): InlineQueryResultVideo
    {
        $this->video_duration = $video_duration;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultVideo
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultVideo
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultVideo
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultVideo
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}