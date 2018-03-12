<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getCountryCode()
 * @method string getState()
 * @method string getCity()
 * @method string getStreetLine1()
 * @method string getStreetLine2()
 * @method string getPostCode()
 */
class ShippingAddress extends BaseType
{
    protected $country_code;
    protected $state;
    protected $city;
    protected $street_line1;
    protected $street_line2;
    protected $post_code;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->country_code = $this->getPropertyFromData('country_code', 'string');
        $this->state = $this->getPropertyFromData('state', 'string');
        $this->street_line1 = $this->getPropertyFromData('street_line1', 'string');
        $this->street_line2 = $this->getPropertyFromData('street_line2', 'string');
        $this->post_code = $this->getPropertyFromData('post_code', 'string');
    }
}
