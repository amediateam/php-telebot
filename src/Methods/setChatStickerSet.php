<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method setChatStickerSet setChatId(integer | string $chatId)
 * @method setChatStickerSet setStickerSetName(string $stickerSetName)
 */
class setChatStickerSet extends BaseMethod
{
    protected $map = [
        'chat_id',
        'sticker_set_name',
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
