<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method setChatDescription setChatId(integer | string $chatId)
 * @method setChatDescription setDescription(string $description)
 */
class setChatDescription extends BaseMethod
{
    protected $map = [
        'chat_id',
        'description',
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
