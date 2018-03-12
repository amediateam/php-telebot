<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getName()
 * @method string getPhoneNumber()
 * @method string getEmail()
 * @method ShippingAddress getShippingAddress()
 */
class OrderInfo extends BaseType
{
    protected $name;
    protected $phone_number;
    protected $email;
    protected $shipping_address;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->name = $this->getPropertyFromData('name', 'string');
        $this->phone_number = $this->getPropertyFromData('phone_number', 'string');
        $this->email = $this->getPropertyFromData('email', 'string');
        $this->shipping_address = $this->getPropertyFromData('shipping_address', ShippingAddress::class);
    }
}
