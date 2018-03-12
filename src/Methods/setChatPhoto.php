<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method setChatPhoto setChatId(integer | string $chatId)
 * @method setChatPhoto setPhoto(\TelegramBot\Api\Extension\InputFile $photo)
 */
class setChatPhoto extends BaseMethod
{
    protected $map = [
        'chat_id',
        'photo',
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
