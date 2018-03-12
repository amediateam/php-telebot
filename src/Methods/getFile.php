<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\File;

/**
 * @method getFile setFileId(string $fileId)
 */
class getFile extends BaseMethod
{
    protected $map = [
        'file_id',
    ];

    public function toResult(array $response)
    {
        return new File($response, $this->botApi);
    }
}
