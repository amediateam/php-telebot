<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\User;

class getMe extends BaseMethod
{
    public function toResult(array $response)
    {
        return new User($response, $this->botApi);
    }
}
