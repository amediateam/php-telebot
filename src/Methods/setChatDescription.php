<?php
namespace TelegramBot\Api\Methods;
/**
 * @method setChatDescription setChatId(integer | string $chatId)
 * @method setChatDescription setDescription(string $description)
 */
class setChatDescription extends BaseMethod
{
    protected $map = [
        'chat_id',
        'description',
    ];

    public function toResult()
    {
        return true;
    }
}
