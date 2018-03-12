<?php
namespace TelegramBot\Api\Methods;
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

    public function toResult()
    {
        return true;
    }
}
