<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\Downloadable;

/**
 * @method string getFileId()
 * @method integer getWidth()
 * @method integer getHeight()
 * @method integer getDuration()
 * @method PhotoSize getThumb()
 * @method string getMimeType()
 * @method integer getFileSize()
 */
class Video extends BaseType
{
    use Downloadable;
    protected $file_id;
    protected $width;
    protected $height;
    protected $duration;
    protected $thumb;
    protected $mime_type;
    protected $file_size;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->width = $this->getPropertyFromData('width', 'integer');
        $this->height = $this->getPropertyFromData('height', 'integer');
        $this->duration = $this->getPropertyFromData('duration', 'integer');
        $this->thumb = $this->getPropertyFromData('thumb', PhotoSize::class);
        $this->mime_type = $this->getPropertyFromData('mime_type', 'string');
        $this->file_size = $this->getPropertyFromData('file_size', 'integer');
    }
}
