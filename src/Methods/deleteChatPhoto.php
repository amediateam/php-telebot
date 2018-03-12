<?php
namespace TelegramBot\Api\Methods;
/**
 * @method deleteChatPhoto setChatId(integer | string $chatId)
 */
class deleteChatPhoto extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    public function toResult()
    {
        return true;
    }
}
