<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\ChatMember;

/**
 * @method getChatMember setChatId(integer $chatId)
 * @method getChatMember setUserId(integer | string $userId)
 */
class getChatMember extends BaseMethod
{
    protected $map = [
        'chat_id',
        'user_id',
    ];

    /**
     * @param BotApi|null $botApi
     * @return ChatMember
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return ChatMember
     */
    public function toResult(array $response)
    {
        return new ChatMember($response, $this->botApi);
    }
}
