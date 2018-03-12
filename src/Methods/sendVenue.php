<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method sendVenue setChatId(integer $chatId)
 * @method sendVenue setLatitude(float $latitude)
 * @method sendVenue setLongitude(float $longitude)
 * @method sendVenue setTitle(string $title)
 * @method sendVenue setAddress(string $address)
 * @method sendVenue setFoursquareId(string $foursquareId)
 * @method sendVenue setDisableNotification(boolean $disableNotification)
 * @method sendVenue setReplyToMessageId(integer $replyToMessageId)
 * @method sendVenue setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendVenue extends BaseMethod
{
    protected $map = [
        'chat_id',
        'latitude',
        'longitude',
        'title',
        'address',
        'foursquare_id',
        'disable_notification',
        'reply_to_message_id',
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
