<?php
namespace TelegramBot\Api\Methods;
/**
 * @method unpinChatMessage setChatId(integer | string $chatId)
 */
class unpinChatMessage extends BaseMethod
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
