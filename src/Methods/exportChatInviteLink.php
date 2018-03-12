<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method exportChatInviteLink setChatId(integer | string $chatId)
 */
class exportChatInviteLink extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    /**
     * @param BotApi|null $botApi
     * @return string
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return string
     */
    public function toResult(array $response)
    {
        return (string)$response;
    }
}
