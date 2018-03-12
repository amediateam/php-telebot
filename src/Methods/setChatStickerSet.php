<?php
namespace TelegramBot\Api\Methods;
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

    public function toResult()
    {
        return true;
    }
}
