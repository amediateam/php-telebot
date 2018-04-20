<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Extension\InputFile;

/**
 * @method setChatPhoto setChatId(integer | string $chatId)
 * @method setChatPhoto setPhoto(InputFile $photo)
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
