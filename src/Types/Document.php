<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getFileId()
 * @method PhotoSize getThumb()
 * @method string getFileName()
 * @method string getMimeType()
 * @method integer getFileSize()
 */
class Document extends BaseType
{
    /** @var string */
    protected $file_id;
    /** @var null|PhotoSize */
    protected $thumb;
    /** @var bool|int|null|string */
    protected $file_name;
    /** @var mixed|null */
    protected $mime_type;
    /** @var int|null */
    protected $file_size;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->thumb = $this->getPropertyFromData('thumb', PhotoSize::class);
        $this->file_name = $this->getPropertyFromData('file_name', 'string');
        $this->mime_type = $this->getPropertyFromData('mime_type', 'string');
        $this->file_size = $this->getPropertyFromData('file_size', 'int');
    }
}
