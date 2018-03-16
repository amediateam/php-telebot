<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method editMessageCaption setChatId(integer | string $chatId)
 * @method editMessageCaption setMessageId(integer $messageId)
 * @method editMessageCaption setInlineMessageId(string $inlineMessageId)
 * @method editMessageCaption setCaption(string $caption)
 * @method editMessageCaption setParseMode(string $parseMode)
 * @method editMessageCaption setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class editMessageCaption extends BaseMethod
{
    protected $map = [
        'chat_id',
        'message_id',
        'inline_message_id',
        'caption',
        'parse_mode',
        'reply_markup',
    ];

    /**
     * @param BotApi|null $botApi
     * @return Message
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return bool|Message
     */
    public function toResult($response)
    {
        return is_bool($response) ? $response : new Message($response, $this->botApi);
    }
}
