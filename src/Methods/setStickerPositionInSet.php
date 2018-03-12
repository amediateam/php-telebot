<?php

namespace TelegramBot\Api\Methods;
/**
 * @method setStickerPositionInSet setSticker(string $sticker)
 * @method setStickerPositionInSet setPosition(integer $position)
 */
class setStickerPositionInSet extends BaseMethod
{
    protected $map = [
        'sticker',
        'position',
    ];

    public function toResult()
    {
        return true;
    }
}
