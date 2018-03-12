<?php
namespace TelegramBot\Api\Methods;

/**
 * @method sendChatAction setChatId(integer $chatId)
 * @method sendChatAction setAction(string $action)
 */
class sendChatAction extends BaseMethod
{
    protected $map = [
        'chat_id',
        'action',
    ];

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
