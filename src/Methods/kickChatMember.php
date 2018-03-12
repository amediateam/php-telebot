<?php
namespace TelegramBot\Api\Methods;
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

    public function toResult()
    {
        return true;
    }
}
