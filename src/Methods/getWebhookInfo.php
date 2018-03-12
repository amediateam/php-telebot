<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\WebhookInfo;

class getWebhookInfo extends BaseMethod
{
    public function toResult(array $response)
    {
        return new WebhookInfo($response, $this->botApi);
    }
}
