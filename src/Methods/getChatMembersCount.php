<?php

namespace TelegramBot\Api\Methods;
/**
 * @method getChatMembersCount setChatId(integer | string $chatId)
 */
class getChatMembersCount extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    public function toResult(array $response)
    {
        return (int)$response;
    }
}
