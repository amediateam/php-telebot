<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\MaskPosition;
use TelegramBot\Api\Extension\InputFile;

/**
 * @method createNewStickerSet setUserId(integer $userId)
 * @method createNewStickerSet setName(string $name)
 * @method createNewStickerSet setPngSticker(InputFile | string $pngSticker)
 * @method createNewStickerSet setEmojis(string $emojis)
 * @method createNewStickerSet setContainsMasks(boolean $containsMasks)
 * @method createNewStickerSet setMaskPosition(MaskPosition $maskPosition)
 */
class createNewStickerSet extends BaseMethod
{
    protected $map = [
        'user_id',
        'name',
        'png_sticker',
        'emojis',
        'contains_masks',
        'mask_position',
    ];

    /**
     * @param BotApi|null $botApi
     * @return bool
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
