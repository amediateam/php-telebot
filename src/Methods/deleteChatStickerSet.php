<?php
namespace TelegramBot\Api\Methods;
/**
 * @method deleteChatStickerSet setChatId(integer | string $chatId)
 */
class deleteChatStickerSet extends BaseMethod
{
    protected $map = [
        'chat_id',
    ];

    public function toResult()
    {
        return true;
    }
}
