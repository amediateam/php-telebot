<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getId()
 * @method User getFrom()
 * @method string getInvoicePayload()
 * @method ShippingAddress getShippingAddress()
 */
class ShippingQuery extends BaseType
{
    protected $id;
    protected $from;
    protected $invoice_payload;
    protected $shipping_address;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->id = $this->getPropertyFromData('id', 'string');
        $this->from = $this->getPropertyFromData('id', User::class);
        $this->invoice_payload = $this->getPropertyFromData('invoice_payload', 'string');
        $this->shipping_address = $this->getPropertyFromData('shipping_address', ShippingAddress::class);
    }
}
