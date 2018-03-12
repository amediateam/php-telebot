<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\Downloadable;

/**
 * @method string getFileId()
 * @method integer getDuration()
 * @method string getMimeType()
 * @method integer getFileSize()
 */
class Voice extends BaseType
{
    use Downloadable;
    protected $file_id;
    protected $duration;
    protected $mime_type;
    protected $file_size;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->duration = $this->getPropertyFromData('duration', 'integer');
        $this->mime_type = $this->getPropertyFromData('mime_type', 'string');
        $this->file_size = $this->getPropertyFromData('file_size', 'integer');
    }
}
