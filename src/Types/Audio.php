<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Traits\Downloadable;

/**
 * @method string getFileId()
 * @method integer getDuration()
 * @method string getPerformer()
 * @method string getTitle()
 * @method string getMimeType()
 * @method integer getFileSize()
 */
class Audio extends BaseType
{
    use Downloadable;
    /** @var string */
    protected $file_id;
    /** @var int|null */
    protected $duration;
    /** @var mixed|null */
    protected $performer;
    /** @var mixed|null */
    protected $title;
    /** @var mixed|null */
    protected $mime_type;
    /** @var int|null */
    protected $file_size;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->file_id = $this->getPropertyFromData('file_id', 'string');
        $this->duration = $this->getPropertyFromData('duration', 'int');
        $this->performer = $this->getPropertyFromData('performer', 'string');
        $this->title = $this->getPropertyFromData('title', 'string');
        $this->mime_type = $this->getPropertyFromData('mime_type', 'string');
        $this->file_size = $this->getPropertyFromData('file_size', 'string');
    }
}