<?php
namespace TelegramBot\Api\Methods;
/**
 * @method deleteMessage setChatId(integer | string $chatId)
 * @method deleteMessage setMessageId(integer $messageId)
 */
class deleteMessage extends BaseMethod
{
    protected $map = [
        'chat_id',
        'message_id',
    ];

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
