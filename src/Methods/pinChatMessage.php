<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

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
     * @param BotApi|null $botApi
     * @return bool
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
