<?php
namespace TelegramBot\Api\Methods;
/**
 * @method leaveChat setChatId(integer | string $chatId)
 */
class leaveChat extends BaseMethod
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
