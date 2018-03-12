<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method unbanChatMember setChatId(integer $chatId)
 * @method unbanChatMember setUserId(integer | string $userId)
 */
class unbanChatMember extends BaseMethod
{
    protected $map = [
        'chat_id',
        'user_id',
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
