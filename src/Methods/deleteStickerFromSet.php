<?php
namespace TelegramBot\Api\Methods;
/**
 * @method deleteStickerFromSet setSticker(string $sticker)
 */
class deleteStickerFromSet extends BaseMethod
{
    protected $map = [
        'sticker',
    ];

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
