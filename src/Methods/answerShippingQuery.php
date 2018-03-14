<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ShippingOption;

/**
 * @method answerShippingQuery setShippingQueryId(string $shippingQueryId)
 * @method answerShippingQuery setOk(boolean $ok)
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
     * @param ShippingOption[] $results
     * @return $this
     */
    public function setShippingOptions(array $shippingOptions)
    {
        foreach ($shippingOptions as &$shippingOption) {
            if ($shippingOption instanceof ShippingOption) {
                $shippingOption = $shippingOption->toArray();
            }
        }
        $this->data['shipping_options'] = $shippingOptions;
        return $this;
    }

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