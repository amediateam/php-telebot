<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ShippingAddress setCountryCode(string $countryCode)
 * @method string getCountryCode()
 * @method \TelegramBot\Api\Types\ShippingAddress setState(string $state)
 * @method string getState()
 * @method \TelegramBot\Api\Types\ShippingAddress setCity(string $city)
 * @method string getCity()
 * @method \TelegramBot\Api\Types\ShippingAddress setStreetLine1(string $streetLine1)
 * @method string getStreetLine1()
 * @method \TelegramBot\Api\Types\ShippingAddress setStreetLine2(string $streetLine2)
 * @method string getStreetLine2()
 * @method \TelegramBot\Api\Types\ShippingAddress setPostCode(string $postCode)
 * @method string getPostCode()
*/
class ShippingAddress extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'country_code',
		'state',
		'city',
		'street_line1',
		'street_line2',
		'post_code'
	];
	static protected $map = [
		'country_code' => 'string',
		'state' => 'string',
		'city' => 'string',
		'street_line1' => 'string',
		'street_line2' => 'string',
		'post_code' => 'string',
	];
	static protected $defaultData = [
	];
}
