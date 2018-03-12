<?php
namespace TelegramBot\Api\Methods;
/**
 * @method setChatPhoto setChatId(integer | string $chatId)
 * @method setChatPhoto setPhoto(\TelegramBot\Api\Extension\InputFile $photo)
 */
class setChatPhoto extends BaseMethod
{
    protected $map = [
        'chat_id',
        'photo',
    ];

    public function toResult()
    {
        return true;
    }
}
