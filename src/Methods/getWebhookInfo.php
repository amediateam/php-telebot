<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\WebhookInfo;

class getWebhookInfo extends BaseMethod
{
    /**
     * @param BotApi|null $botApi
     * @return WebhookInfo
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return WebhookInfo
     */
    public function toResult(array $response)
    {
        return new WebhookInfo($response, $this->botApi);
    }
}
