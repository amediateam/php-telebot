<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method addStickerToSet setUserId(integer $userId)
 * @method addStickerToSet setName(string $name)
 * @method addStickerToSet setPngSticker(\TelegramBot\Api\Extension\InputFile | string $pngSticker)
 * @method addStickerToSet setEmojis(string $emojis)
 * @method addStickerToSet setMaskPosition(\TelegramBot\Api\Types\MaskPosition $maskPosition)
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
