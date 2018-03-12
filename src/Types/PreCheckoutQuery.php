<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getId()
 * @method User getFrom()
 * @method string getCurrency()
 * @method integer getTotalAmount()
 * @method string getInvoicePayload()
 * @method string getShippingOptionId()
 * @method OrderInfo getOrderInfo()
 */
class PreCheckoutQuery extends BaseType
{
    protected $id;
    protected $from;
    protected $currency;
    protected $total_amount;
    protected $invoice_payload;
    protected $shipping_option_id;
    protected $order_info;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->id = $this->getPropertyFromData('id', 'string');
        $this->from = $this->getPropertyFromData('from', User::class);
        $this->currency = $this->getPropertyFromData('currency', 'string');
        $this->total_amount = $this->getPropertyFromData('total_amount', 'int');
        $this->invoice_payload = $this->getPropertyFromData('invoice_payload', 'string');
        $this->shipping_option_id = $this->getPropertyFromData('shipping_option_id', 'string');
        $this->order_info = $this->getPropertyFromData('order_info', OrderInfo::class);
    }
}
