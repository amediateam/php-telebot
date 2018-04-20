<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Extension\InputFile;
use TelegramBot\Api\Types\MaskPosition;

/**
 * @method addStickerToSet setUserId(integer $userId)
 * @method addStickerToSet setName(string $name)
 * @method addStickerToSet setPngSticker(InputFile | string $pngSticker)
 * @method addStickerToSet setEmojis(string $emojis)
 * @method addStickerToSet setMaskPosition(MaskPosition $maskPosition)
 */
class addStickerToSet extends BaseMethod
{
    protected $map = [
        'user_id',
        'name',
        'png_sticker',
        'emojis',
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
