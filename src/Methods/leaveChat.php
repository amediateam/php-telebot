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

    public function toResult()
    {
        return true;
    }
}
