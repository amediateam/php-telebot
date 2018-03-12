<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\DownloadableChatPhoto;

/**
 * @method string getSmallFileId()
 * @method string getBigFileId()
 */
class ChatPhoto extends BaseType
{
    protected $small_file_id;
    protected $big_file_id;

    use DownloadableChatPhoto;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->small_file_id = $this->getPropertyFromData('small_file_id', 'string');
        $this->big_file_id = $this->getPropertyFromData('big_file_id', 'string');
    }

}
