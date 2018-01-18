<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\OrderInfo setName(string $name)
 * @method string getName()
 * @method \TelegramBot\Api\Types\OrderInfo setPhoneNumber(string $phoneNumber)
 * @method string getPhoneNumber()
 * @method \TelegramBot\Api\Types\OrderInfo setEmail(string $email)
 * @method string getEmail()
 * @method \TelegramBot\Api\Types\OrderInfo setShippingAddress(\TelegramBot\Api\Types\ShippingAddress $shippingAddress)
 * @method \TelegramBot\Api\Types\ShippingAddress getShippingAddress()
*/
class OrderInfo extends BaseType implements TypeInterface
{
public static $name = 'OrderInfo';
	static protected $requiredParams = [
		
	];
	static protected $map = [
		'name' => 'string',
		'phone_number' => 'string',
		'email' => 'string',
		'shipping_address' => \TelegramBot\Api\Types\ShippingAddress::class,
	];
	static protected $defaultData = [
	];
}
