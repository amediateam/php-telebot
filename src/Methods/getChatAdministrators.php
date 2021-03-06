<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
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
     * @param BotApi|null $botApi
     * @return ChatMember[]
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

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
