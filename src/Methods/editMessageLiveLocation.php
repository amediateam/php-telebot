<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method editMessageLiveLocation setChatId(integer | string $chatId)
 * @method editMessageLiveLocation setMessageId(integer $messageId)
 * @method editMessageLiveLocation setInlineMessageId(string $inlineMessageId)
 * @method editMessageLiveLocation setLatitude(float $latitude)
 * @method editMessageLiveLocation setLongitude(float $longitude)
 * @method editMessageLiveLocation setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class editMessageLiveLocation extends BaseMethod
{
    protected $map = [
        'chat_id',
        'message_id',
        'inline_message_id',
        'latitude',
        'longitude',
        'reply_markup',
    ];

    /**
     * @param array $response
     * @return Message
     */
    public function toResult(array $response)
    {
        return new Message($response, $this->botApi);
    }
}
