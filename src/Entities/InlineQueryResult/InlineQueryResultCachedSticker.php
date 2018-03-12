<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultCachedSticker extends InlineQueryResult
{
    /** @var string */
    protected $type = 'sticker';
    /** @var string */
    protected $id;
    /** @var string */
    protected $sticker_file_id;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;

    /**
     * @param string $id
     * @return InlineQueryResultCachedSticker
     */
    public function setId(string $id): InlineQueryResultCachedSticker
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $sticker_file_id
     * @return InlineQueryResultCachedSticker
     */
    public function setStickerFileId(string $sticker_file_id): InlineQueryResultCachedSticker
    {
        $this->sticker_file_id = $sticker_file_id;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultCachedSticker
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultCachedSticker
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultCachedSticker
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultCachedSticker
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}