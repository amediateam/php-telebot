<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultVoice extends InlineQueryResult
{
    /** @var string */
    protected $type = 'voice';
    /** @var string */
    protected $id;
    /** @var string */
    protected $voice_url;
    /** @var string */
    protected $title;
    /** @var string */
    protected $caption;
    /** @var string */
    protected $parse_mode;
    /** @var int */
    protected $voice_duration;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;

    /**
     * @param string $id
     * @return InlineQueryResultVoice
     */
    public function setId(string $id): InlineQueryResultVoice
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $voice_url
     * @return InlineQueryResultVoice
     */
    public function setVoiceUrl(string $voice_url): InlineQueryResultVoice
    {
        $this->voice_url = $voice_url;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultVoice
     */
    public function setTitle(string $title): InlineQueryResultVoice
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultVoice
     */
    public function setCaption(string $caption): InlineQueryResultVoice
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultVoice
     */
    public function setParseMode(string $parse_mode): InlineQueryResultVoice
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param int $voice_duration
     * @return InlineQueryResultVoice
     */
    public function setVoiceDuration(int $voice_duration): InlineQueryResultVoice
    {
        $this->voice_duration = $voice_duration;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultVoice
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultVoice
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultVoice
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultVoice
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}