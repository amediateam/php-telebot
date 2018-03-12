<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

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
