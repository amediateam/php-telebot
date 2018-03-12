<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\Downloadable;

/**
 * @method string getFileId()
 * @method integer getLength()
 * @method integer getDuration()
 * @method PhotoSize getThumb()
 * @method integer getFileSize()
 */
class VideoNote extends BaseType
{
    use Downloadable;
    protected $file_id;
    protected $length;
    protected $duration;
    protected $thumb;
    protected $file_size;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->length = $this->getPropertyFromData('length', 'integer');
        $this->duration = $this->getPropertyFromData('duration', 'integer');
        $this->thumb = $this->getPropertyFromData('thumb', PhotoSize::class);
        $this->file_size = $this->getPropertyFromData('file_size', 'integer');
    }
}
