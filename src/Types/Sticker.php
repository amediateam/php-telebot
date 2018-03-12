<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\Downloadable;

/**
 * @method string getFileId()
 * @method integer getWidth()
 * @method integer getHeight()
 * @method PhotoSize getThumb()
 * @method string getEmoji()
 * @method string getSetName()
 * @method MaskPosition getMaskPosition()
 * @method integer getFileSize()
 */
class Sticker extends BaseType
{
    use Downloadable;
    protected $file_id;
    protected $width;
    protected $height;
    protected $thumb;
    protected $emoji;
    protected $set_name;
    protected $mask_position;
    protected $file_size;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->width = $this->getPropertyFromData('width', 'int');
        $this->height = $this->getPropertyFromData('height', 'int');
        $this->thumb = $this->getPropertyFromData('thumb', PhotoSize::class);
        $this->emoji = $this->getPropertyFromData('emoji', 'string');
        $this->set_name = $this->getPropertyFromData('set_name', 'string');
        $this->mask_position = $this->getPropertyFromData('mask_position', MaskPosition::class);
        $this->file_size = $this->getPropertyFromData('file_size', 'int');
    }
}
