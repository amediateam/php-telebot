<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\BaseEntity;
use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedAudio extends BaseEntity
{
    /** @var string */
    protected $type = 'audio';
    /** @var string */
    protected $id;
    /** @var string */
    protected $audio_file_id;
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
     * @return InlineQueryResultCachedAudio
     */
    public function setId(string $id): InlineQueryResultCachedAudio
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $audio_file_id
     * @return InlineQueryResultCachedAudio
     */
    public function setAudioFileId(string $audio_file_id): InlineQueryResultCachedAudio
    {
        $this->audio_file_id = $audio_file_id;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultCachedAudio
     */
    public function setCaption(string $caption): InlineQueryResultCachedAudio
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultCachedAudio
     */
    public function setParseMode(string $parse_mode): InlineQueryResultCachedAudio
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedAudio
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedAudio
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedAudio
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedAudio
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}