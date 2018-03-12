<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method sendChatAction setChatId(integer $chatId)
 * @method sendChatAction setAction(string $action)
 */
class sendChatAction extends BaseMethod
{
    protected $map = [
        'chat_id',
        'action',
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
