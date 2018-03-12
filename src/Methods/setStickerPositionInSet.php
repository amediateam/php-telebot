<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

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
