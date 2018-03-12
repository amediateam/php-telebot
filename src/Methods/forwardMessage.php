<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\Message;

/**
 * @method forwardMessage setChatId(integer $chatId)
 * @method forwardMessage setFromChatId(integer $fromChatId)
 * @method forwardMessage setDisableNotification(boolean $disableNotification)
 * @method forwardMessage setMessageId(integer $messageId)
 */
class forwardMessage extends BaseMethod
{
    protected $map = [
        'chat_id',
        'from_chat_id',
        'disable_notification',
        'message_id',
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
