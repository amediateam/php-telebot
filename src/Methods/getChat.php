<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
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
     * @param BotApi|null $botApi
     * @return Chat
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return Chat
     */
    public function toResult(array $response)
    {
        return new Chat($response, $this->botApi);
    }
}
