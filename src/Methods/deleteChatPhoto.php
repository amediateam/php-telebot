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

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
