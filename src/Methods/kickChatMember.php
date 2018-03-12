<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method kickChatMember setChatId(integer $chatId)
 * @method kickChatMember setUserId(integer | string $userId)
 * @method kickChatMember setUntilDate(integer $untilDate)
 */
class kickChatMember extends BaseMethod
{
    protected $map = [
        'chat_id',
        'user_id',
        'until_date',
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
