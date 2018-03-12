<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Extension\InputFile;
use TelegramBot\Api\Types\Message;

/**
 * @method sendSticker setChatId(integer | string $chatId)
 * @method sendSticker setSticker(InputFile | string $sticker)
 * @method sendSticker setDisableNotification(boolean $disableNotification)
 * @method sendSticker setReplyToMessageId(boolean $replyToMessageId)
 * @method sendSticker setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendSticker extends BaseMethod
{
    protected $map = [
        'chat_id',
        'sticker',
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
