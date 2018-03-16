<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method editMessageReplyMarkup setChatId(integer | string $chatId)
 * @method editMessageReplyMarkup setMessageId(integer $messageId)
 * @method editMessageReplyMarkup setInlineMessageId(string $inlineMessageId)
 * @method editMessageReplyMarkup setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class editMessageReplyMarkup extends BaseMethod
{
    protected $map = [
        'chat_id',
        'message_id',
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
