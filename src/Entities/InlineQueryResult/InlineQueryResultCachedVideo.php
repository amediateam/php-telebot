<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedVideo
{
    /** @var string */
    protected $type = 'video';
    /** @var string */
    protected $id;
    /** @var string */
    protected $video_file_id;
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
     * @return InlineQueryResultCachedVideo
     */
    public function setId(string $id): InlineQueryResultCachedVideo
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $video_file_id
     * @return InlineQueryResultCachedVideo
     */
    public function setVideoFileId(string $video_file_id): InlineQueryResultCachedVideo
    {
        $this->video_file_id = $video_file_id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultCachedVideo
     */
    public function setTitle(string $title): InlineQueryResultCachedVideo
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $description
     * @return InlineQueryResultCachedVideo
     */
    public function setDescription(string $description): InlineQueryResultCachedVideo
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultCachedVideo
     */
    public function setCaption(string $caption): InlineQueryResultCachedVideo
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultCachedVideo
     */
    public function setParseMode(string $parse_mode): InlineQueryResultCachedVideo
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedVideo
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedVideo
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedVideo
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedVideo
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}