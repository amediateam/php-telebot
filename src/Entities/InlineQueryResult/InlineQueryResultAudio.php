<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultAudio extends InlineQueryResult
{
    /** @var string */
    protected $type = 'audio';
    /** @var string */
    protected $id;
    /** @var string */
    protected $audio_url;
    /** @var string */
    protected $title;
    /** @var string */
    protected $caption;
    /** @var string */
    protected $parse_mode;
    /** @var string */
    protected $performer;
    /** @var int */
    protected $audio_duration;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;

    /**
     * @param string $id
     * @return InlineQueryResultAudio
     */
    public function setId(string $id): InlineQueryResultAudio
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $audio_url
     * @return InlineQueryResultAudio
     */
    public function setAudioUrl(string $audio_url): InlineQueryResultAudio
    {
        $this->audio_url = $audio_url;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultAudio
     */
    public function setTitle(string $title): InlineQueryResultAudio
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultAudio
     */
    public function setCaption(string $caption): InlineQueryResultAudio
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultAudio
     */
    public function setParseMode(string $parse_mode): InlineQueryResultAudio
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param string $performer
     * @return InlineQueryResultAudio
     */
    public function setPerformer(string $performer): InlineQueryResultAudio
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * @param int $audio_duration
     * @return InlineQueryResultAudio
     */
    public function setAudioDuration(int $audio_duration): InlineQueryResultAudio
    {
        $this->audio_duration = $audio_duration;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultAudio
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultAudio
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultAudio
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultAudio
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}