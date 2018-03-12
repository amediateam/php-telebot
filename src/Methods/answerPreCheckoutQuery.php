<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;

/**
 * @method answerPreCheckoutQuery setPreCheckoutQueryId(string $preCheckoutQueryId)
 * @method answerPreCheckoutQuery setOk(boolean $ok)
 * @method answerPreCheckoutQuery setErrorMessage(string $errorMessage)
 */
class answerPreCheckoutQuery extends BaseMethod
{
    protected $map = [
        'pre_checkout_query_id',
        'ok',
        'error_message',
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
