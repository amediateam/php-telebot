<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Extension\InputFile;

/**
 * @method setWebhook setUrl(string $url)
 * @method setWebhook setCertificate(InputFile $certificate)
 * @method setWebhook setMaxConnections(integer $maxConnections)
 * @method setWebhook setAllowedUpdates(string [] $allowedUpdates)
 */
class setWebhook extends BaseMethod
{
    protected $map = [
        'url',
        'certificate',
        'max_connections',
        'allowed_updates',
    ];

    /**
     * @param BotApi|null $botApi
     * @return bool
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
