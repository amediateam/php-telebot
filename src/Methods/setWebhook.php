<?php
namespace TelegramBot\Api\Methods;

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

    public function toResult()
    {
        return true;
    }
}
