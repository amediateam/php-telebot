<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedMpeg4Gif extends InlineQueryResult
{
    /** @var string */
    protected $type = 'mpeg4_gif';
    /** @var string */
    protected $id;
    /** @var string */
    protected $mpeg4_file_id;
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
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setId(string $id): InlineQueryResultCachedMpeg4Gif
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $mpeg4_file_id
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setMpeg4FileId(string $mpeg4_file_id): InlineQueryResultCachedMpeg4Gif
    {
        $this->mpeg4_file_id = $mpeg4_file_id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setTitle(string $title): InlineQueryResultCachedMpeg4Gif
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setCaption(string $caption): InlineQueryResultCachedMpeg4Gif
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setParseMode(string $parse_mode): InlineQueryResultCachedMpeg4Gif
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedMpeg4Gif
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedMpeg4Gif
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedMpeg4Gif
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}