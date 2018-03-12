<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Extension\InputFile;
use TelegramBot\Api\Types\Message;

/**
 * @method sendVideoNote setChatId(integer | string $chatId)
 * @method sendVideoNote setVideoNote(InputFile | string $videoNote)
 * @method sendVideoNote setDuration(integer $duration)
 * @method sendVideoNote setLength(integer $length)
 * @method sendVideoNote setDisableNotification(boolean $disableNotification)
 * @method sendVideoNote setReplyToMessageId(integer $replyToMessageId)
 * @method sendVideoNote setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendVideoNote extends BaseMethod
{
    protected $map = [
        'chat_id',
        'video_note',
        'duration',
        'length',
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
