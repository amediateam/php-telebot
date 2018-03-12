<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ShippingOption;

/**
 * @method answerShippingQuery setShippingQueryId(string $shippingQueryId)
 * @method answerShippingQuery setOk(boolean $ok)
 * @method answerShippingQuery setShippingOptions(ShippingOption [] $shippingOptions)
 * @method answerShippingQuery setErrorMessage(string $errorMessage)
 */
class answerShippingQuery extends BaseMethod
{
    protected $map = [
        'shipping_query_id',
        'ok',
        'shipping_options',
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