<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method setChatTitle setChatId(integer | string $chatId)
 * @method setChatTitle setTitle(string $title)
 */
class setChatTitle extends BaseMethod
{
    protected $map = [
        'chat_id',
        'title',
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
