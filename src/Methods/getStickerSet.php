<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\StickerSet;

/**
 * @method getStickerSet setName(string $name)
 */
class getStickerSet extends BaseMethod
{
    protected $map = [
        'name',
    ];

    /**
     * @param array $response
     * @return StickerSet
     */
    public function toResult(array $response)
    {
        return new StickerSet($response, $this->botApi);
    }
}
