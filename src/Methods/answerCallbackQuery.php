<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method answerCallbackQuery setCallbackQueryId(string $callbackQueryId)
 * @method answerCallbackQuery setText(string $text)
 * @method answerCallbackQuery setShowAlert(boolean $showAlert)
 * @method answerCallbackQuery setUrl(string $url)
 * @method answerCallbackQuery setCacheTime(integer $cacheTime)
 */
class answerCallbackQuery extends BaseMethod
{
    protected $map = [
        'callback_query_id',
        'text',
        'show_alert',
        'url',
        'cache_time',
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
