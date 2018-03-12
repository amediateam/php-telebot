<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method sendMessage setChatId(integer | string $chatId)
 * @method sendMessage setText(string $text)
 * @method sendMessage setParseMode(string $parseMode)
 * @method sendMessage setDisableWebPagePreview(boolean $disableWebPagePreview)
 * @method sendMessage setDisableNotification(boolean $disableNotification)
 * @method sendMessage setReplyToMessageId(integer $replyToMessageId)
 * @method sendMessage setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendMessage extends BaseMethod
{
    protected $map = [
        'chat_id',
        'text',
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
