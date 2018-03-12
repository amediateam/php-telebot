<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\User;

class getMe extends BaseMethod
{
    /**
     * @param BotApi|null $botApi
     * @return User
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return User
     */
    public function toResult(array $response)
    {
        return new User($response, $this->botApi);
    }
}
