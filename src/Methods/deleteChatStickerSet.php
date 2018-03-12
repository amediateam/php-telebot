<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method deleteChatStickerSet setChatId(integer | string $chatId)
 */
class deleteChatStickerSet extends BaseMethod
{
    protected $map = [
        'chat_id',
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
