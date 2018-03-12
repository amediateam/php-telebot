<?php
namespace TelegramBot\Api\Types;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\Downloadable;

/**
 * @method string getFileId()
 * @method integer getFileSize()
 * @method string getFilePath()
 */
class File extends BaseType
{
    use Downloadable;
    /** @var bool|int|null|string */
    protected $file_id;
    /** @var bool|int|null|string */
    protected $file_size;
    /** @var bool|int|null|string */
    protected $file_path;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->file_size = $this->getPropertyFromData('file_size', 'int');
        $this->file_path = $this->getPropertyFromData('file_path', 'string');
    }
}
