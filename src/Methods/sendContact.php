<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method sendContact setChatId(integer $chatId)
 * @method sendContact setPhoneNumber(string $phoneNumber)
 * @method sendContact setFirstName(string $firstName)
 * @method sendContact setLastName(string $lastName)
 * @method sendContact setDisableNotification(boolean $disableNotification)
 * @method sendContact setReplyToMessageId(integer $replyToMessageId)
 * @method sendContact setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendContact extends BaseMethod
{
    protected $map = [
        'chat_id',
        'phone_number',
        'first_name',
        'last_name',
        'disable_notification',
        'reply_to_message_id',
        'reply_markup',
    ];

    public function toResult(array $response)
    {
        return new Message($response, $this->botApi);
    }
}
