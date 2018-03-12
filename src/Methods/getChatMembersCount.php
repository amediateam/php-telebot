<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method getChatMembersCount setChatId(integer | string $chatId)
 */
class getChatMembersCount extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    /**
     * @param BotApi|null $botApi
     * @return int
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return int
     */
    public function toResult(array $response)
    {
        return (int)$response;
    }
}
