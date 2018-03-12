<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Extension\InputFile;
use TelegramBot\Api\Types\Message;

/**
 * @method sendPhoto setChatId(integer | string $chatId)
 * @method sendPhoto setPhoto(InputFile | string $photo)
 * @method sendPhoto setCaption(string $caption)
 * @method sendPhoto setParseMode(string $parseMode)
 * @method sendPhoto setDisableNotification(boolean $disableNotification)
 * @method sendPhoto setReplyToMessageId(integer $replyToMessageId)
 * @method sendPhoto setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendPhoto extends BaseMethod
{
    protected $map = [
        'chat_id',
        'photo',
        'caption',
        'parse_mode',
        'disable_web_page_preview',
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
