<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;

/**
 * @method stopMessageLiveLocation setChatId(integer | string $chatId)
 * @method stopMessageLiveLocation setMessageId(integer $messageId)
 * @method stopMessageLiveLocation setInlineMessageId(string $inlineMessageId)
 * @method stopMessageLiveLocation setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class stopMessageLiveLocation extends BaseMethod
{
    protected $map = [
        'chat_id',
        'message_id',
        'inline_message_id',
        'reply_markup',
    ];

    /**
     * @param BotApi|null $botApi
     * @return bool
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
