<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\ChatMember;

/**
 * @method getChatAdministrators setChatId(integer | string $chatId)
 */
class getChatAdministrators extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    /**
     * @param array $response
     * @return ChatMember[]
     */
    public function toResult(array $response)
    {
        $result = [];
        foreach ($response as $member) {
            $result[] = new ChatMember($member, $this->botApi);
        }
        return $result;
    }
}
