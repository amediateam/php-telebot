<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method sendLocation setChatId(integer $chatId)
 * @method sendLocation setLatitude(float $latitude)
 * @method sendLocation setLongitude(float $longitude)
 * @method sendLocation setLivePeriod(integer $livePeriod)
 * @method sendLocation setDisableNotification(boolean $disableNotification)
 * @method sendLocation setReplyToMessageId(integer $replyToMessageId)
 * @method sendLocation setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendLocation extends BaseMethod
{
    protected $map = [
        'chat_id',
        'latitude',
        'longitude',
        'live_period',
        'disable_notification',
        'reply_to_message_id',
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
     * @return Message
     */
    public function toResult(array $response)
    {
        return new Message($response, $this->botApi);
    }
}
