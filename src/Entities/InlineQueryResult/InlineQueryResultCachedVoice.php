<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedVoice extends InlineQueryResult
{
    /** @var string */
    protected $type = 'voice';
    /** @var string */
    protected $id;
    /** @var string */
    protected $voice_file_id;
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
     * @return InlineQueryResultCachedVoice
     */
    public function setId(string $id): InlineQueryResultCachedVoice
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $voice_file_id
     * @return InlineQueryResultCachedVoice
     */
    public function setVoiceFileId(string $voice_file_id): InlineQueryResultCachedVoice
    {
        $this->voice_file_id = $voice_file_id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultCachedVoice
     */
    public function setTitle(string $title): InlineQueryResultCachedVoice
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultCachedVoice
     */
    public function setCaption(string $caption): InlineQueryResultCachedVoice
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultCachedVoice
     */
    public function setParseMode(string $parse_mode): InlineQueryResultCachedVoice
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedVoice
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedVoice
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedVoice
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedVoice
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}