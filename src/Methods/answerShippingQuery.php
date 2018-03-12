<?php
namespace TelegramBot\Api\Methods;

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
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}