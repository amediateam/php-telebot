<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedGif extends InlineQueryResult
{
    /** @var string */
    protected $type = 'gif';
    /** @var string */
    protected $id;
    /** @var string */
    protected $gif_file_id;
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
     * @return InlineQueryResultCachedGif
     */
    public function setId(string $id): InlineQueryResultCachedGif
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $gif_file_id
     * @return InlineQueryResultCachedGif
     */
    public function setGifFileId(string $gif_file_id): InlineQueryResultCachedGif
    {
        $this->gif_file_id = $gif_file_id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultCachedGif
     */
    public function setTitle(string $title): InlineQueryResultCachedGif
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultCachedGif
     */
    public function setCaption(string $caption): InlineQueryResultCachedGif
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultCachedGif
     */
    public function setParseMode(string $parse_mode): InlineQueryResultCachedGif
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedGif
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedGif
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedGif
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedGif
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}