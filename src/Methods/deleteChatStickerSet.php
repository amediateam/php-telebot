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

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
