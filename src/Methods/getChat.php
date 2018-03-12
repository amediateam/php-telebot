<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\Chat;

/**
 * @method getChat setChatId(integer | string $chatId)
 */
class getChat extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    /**
     * @param array $response
     * @return Chat
     */
    public function toResult(array $response)
    {
        return new Chat($response, $this->botApi);
    }
}
