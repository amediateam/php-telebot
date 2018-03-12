<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedPhoto extends InlineQueryResult
{
    /** @var string */
    protected $type = 'photo';
    /** @var string */
    protected $id;
    /** @var string */
    protected $photo_file_id;
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
     * @return InlineQueryResultCachedPhoto
     */
    public function setId(string $id): InlineQueryResultCachedPhoto
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $photo_file_id
     * @return InlineQueryResultCachedPhoto
     */
    public function setPhotoFileId(string $photo_file_id): InlineQueryResultCachedPhoto
    {
        $this->photo_file_id = $photo_file_id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultCachedPhoto
     */
    public function setTitle(string $title): InlineQueryResultCachedPhoto
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $description
     * @return InlineQueryResultCachedPhoto
     */
    public function setDescription(string $description): InlineQueryResultCachedPhoto
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultCachedPhoto
     */
    public function setCaption(string $caption): InlineQueryResultCachedPhoto
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultCachedPhoto
     */
    public function setParseMode(string $parse_mode): InlineQueryResultCachedPhoto
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedPhoto
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedPhoto
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedPhoto
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedPhoto
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}