<?php
namespace TelegramBot\Api\Methods;
/**
 * @method pinChatMessage setChatId(integer | string $chatId)
 * @method pinChatMessage setMessageId(integer $messageId)
 * @method pinChatMessage setDisableNotification(boolean $disableNotification)
 */
class pinChatMessage extends BaseMethod
{
    protected $map = [
        'chat_id',
        'message_id',
        'disable_notification',
    ];

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
