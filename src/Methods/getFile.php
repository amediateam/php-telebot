<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\File;

/**
 * @method getFile setFileId(string $fileId)
 */
class getFile extends BaseMethod
{
    protected $map = [
        'file_id',
    ];

    /**
     * @param BotApi|null $botApi
     * @return File
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return File
     */
    public function toResult(array $response)
    {
        return new File($response, $this->botApi);
    }
}
