<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getUrl()
 * @method boolean getHasCustomCertificate()
 * @method integer getPendingUpdateCount()
 * @method integer getLastErrorDate()
 * @method string getLastErrorMessage()
 * @method integer getMaxConnections()
 * @method string[] getAllowedUpdates()
 */
class WebhookInfo extends BaseType
{
    protected $url;
    protected $has_custom_certificate;
    protected $pending_update_count;
    protected $last_error_date;
    protected $last_error_message;
    protected $max_connections;
    protected $allowed_updates;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->url = $this->getPropertyFromData('url', 'string');
        $this->has_custom_certificate = $this->getPropertyFromData('has_custom_certificate', 'bool');
        $this->pending_update_count = $this->getPropertyFromData('pending_update_count', 'integer');
        $this->last_error_date = $this->getPropertyFromData('last_error_date', 'integer');
        $this->last_error_message = $this->getPropertyFromData('last_error_message', 'string');
        $this->max_connections = $this->getPropertyFromData('max_connections', 'integer');
        $this->allowed_updates = [];
        foreach ($data['allowed_updates'] as $allowed_update) {
            $this->allowed_updates[] = $allowed_update;
        }
    }
}
