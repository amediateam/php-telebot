<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\User;

class getMe extends BaseMethod
{
    /**
     * @param array $response
     * @return User
     */
    public function toResult(array $response)
    {
        return new User($response, $this->botApi);
    }
}
