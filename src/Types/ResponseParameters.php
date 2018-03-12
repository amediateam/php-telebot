<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method integer getMigrateToChatId()
 * @method integer getRetryAfter()
 */
class ResponseParameters extends BaseType
{
    protected $migrate_to_chat_id;
    protected $retry_after;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->migrate_to_chat_id = $this->getPropertyFromData('migrate_to_chat_id', 'int');
        $this->retry_after = $this->getPropertyFromData('retry_after', 'int');
    }
}
