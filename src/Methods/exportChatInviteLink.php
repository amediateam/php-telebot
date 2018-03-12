<?php

namespace TelegramBot\Api\Methods;
/**
 * @method exportChatInviteLink setChatId(integer | string $chatId)
 */
class exportChatInviteLink extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    /**
     * @param array $response
     * @return string
     */
    public function toResult(array $response)
    {
        return (string)$response;
    }
}
