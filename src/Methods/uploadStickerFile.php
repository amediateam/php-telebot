<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\File;

/**
 * @method uploadStickerFile setUserId(integer $userId)
 * @method uploadStickerFile setPngSticker(\TelegramBot\Api\Extension\InputFile $pngSticker)
 */
class uploadStickerFile extends BaseMethod
{
    protected $map = [
        'user_id',
        'png_sticker',
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
