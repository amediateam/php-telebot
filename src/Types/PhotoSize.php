<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\Downloadable;

/**
 * @method string getFileId()
 * @method integer getWidth()
 * @method integer getHeight()
 * @method integer getFileSize()
 */
class PhotoSize extends BaseType
{
    use Downloadable;
    protected $file_id;
    protected $width;
    protected $height;
    protected $file_size;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->width = $this->getPropertyFromData('width', 'int');
        $this->height = $this->getPropertyFromData('height', 'int');
        $this->file_size = $this->getPropertyFromData('file_size', 'int');
    }
}
