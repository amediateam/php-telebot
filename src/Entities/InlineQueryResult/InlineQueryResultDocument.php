<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultDocument extends InlineQueryResult
{
    /** @var string */
    protected $type = 'document';
    /** @var string */
    protected $id;
    /** @var string */
    protected $title;
    /** @var string */
    protected $caption;
    /** @var string */
    protected $parse_mode;
    /** @var string */
    protected $document_url;
    /** @var string */
    protected $mime_type;
    /** @var string */
    protected $description;
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
     * @return InlineQueryResultDocument
     */
    public function setId(string $id): InlineQueryResultDocument
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultDocument
     */
    public function setTitle(string $title): InlineQueryResultDocument
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultDocument
     */
    public function setCaption(string $caption): InlineQueryResultDocument
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultDocument
     */
    public function setParseMode(string $parse_mode): InlineQueryResultDocument
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param string $document_url
     * @return InlineQueryResultDocument
     */
    public function setDocumentUrl(string $document_url): InlineQueryResultDocument
    {
        $this->document_url = $document_url;
        return $this;
    }

    /**
     * @param string $mime_type
     * @return InlineQueryResultDocument
     */
    public function setMimeType(string $mime_type): InlineQueryResultDocument
    {
        $this->mime_type = $mime_type;
        return $this;
    }

    /**
     * @param string $description
     * @return InlineQueryResultDocument
     */
    public function setDescription(string $description): InlineQueryResultDocument
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultDocument
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultDocument
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultDocument
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultDocument
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultDocument
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultDocument
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param int $thumb_width
     * @return InlineQueryResultDocument
     */
    public function setThumbWidth(int $thumb_width): InlineQueryResultDocument
    {
        $this->thumb_width = $thumb_width;
        return $this;
    }

    /**
     * @param int $thumb_height
     * @return InlineQueryResultDocument
     */
    public function setThumbHeight(int $thumb_height): InlineQueryResultDocument
    {
        $this->thumb_height = $thumb_height;
        return $this;
    }
}