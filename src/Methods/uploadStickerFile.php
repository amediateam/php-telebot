<?php

namespace TelegramBot\Api\Methods;

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

    public function toResult(array $response)
    {
        return new File($response, $this->botApi);
    }
}
