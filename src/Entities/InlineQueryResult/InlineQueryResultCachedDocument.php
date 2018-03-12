<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedDocument extends InlineQueryResult
{
    /** @var string */
    protected $type = 'document';
    /** @var string */
    protected $id;
    /** @var string */
    protected $title;
    /** @var string */
    protected $document_file_id;
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
     * @return InlineQueryResultCachedDocument
     */
    public function setId(string $id): InlineQueryResultCachedDocument
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultCachedDocument
     */
    public function setTitle(string $title): InlineQueryResultCachedDocument
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $document_file_id
     * @return InlineQueryResultCachedDocument
     */
    public function setDocumentFileId(string $document_file_id): InlineQueryResultCachedDocument
    {
        $this->document_file_id = $document_file_id;
        return $this;
    }

    /**
     * @param string $description
     * @return InlineQueryResultCachedDocument
     */
    public function setDescription(string $description): InlineQueryResultCachedDocument
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultCachedDocument
     */
    public function setCaption(string $caption): InlineQueryResultCachedDocument
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultCachedDocument
     */
    public function setParseMode(string $parse_mode): InlineQueryResultCachedDocument
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedDocument
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedDocument
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedDocument
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedDocument
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}