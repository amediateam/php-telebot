<?php
namespace TelegramBot\Api\Methods;

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

    public function toResult(array $response)
    {
        return new ChatMember($response, $this->botApi);
    }
}
