<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getCurrency()
 * @method integer getTotalAmount()
 * @method string getInvoicePayload()
 * @method string getShippingOptionId()
 * @method OrderInfo getOrderInfo()
 * @method string getTelegramPaymentChargeId()
 * @method string getProviderPaymentChargeId()
 */
class SuccessfulPayment extends BaseType
{
    protected $currency;
    protected $total_amount;
    protected $invoice_payload;
    protected $shipping_option_id;
    protected $order_info;
    protected $telegram_payment_charge_id;
    protected $provider_payment_charge_id;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->currency = $this->getPropertyFromData('currency', 'string');
        $this->total_amount = $this->getPropertyFromData('total_amount', 'integer');
        $this->invoice_payload = $this->getPropertyFromData('invoice_payload', 'integer');
        $this->shipping_option_id = $this->getPropertyFromData('shipping_option_id', 'integer');
        $this->order_info = $this->getPropertyFromData('order_info', OrderInfo::class);
        $this->telegram_payment_charge_id = $this->getPropertyFromData('telegram_payment_charge_id', 'integer');
        $this->provider_payment_charge_id = $this->getPropertyFromData('provider_payment_charge_id', 'integer');
    }
}
