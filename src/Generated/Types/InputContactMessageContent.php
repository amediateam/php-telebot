<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InputContactMessageContent setPhoneNumber(string $phoneNumber)
 * @method string getPhoneNumber()
 * @method \TelegramBot\Api\Types\InputContactMessageContent setFirstName(string $firstName)
 * @method string getFirstName()
 * @method \TelegramBot\Api\Types\InputContactMessageContent setLastName(string $lastName)
 * @method string getLastName()
*/
class InputContactMessageContent extends BaseType implements TypeInterface
{
public static $name = 'InputContactMessageContent';
	static protected $requiredParams = [
		'phone_number',
		'first_name'
	];
	static protected $map = [
		'phone_number' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
	];
	static protected $defaultData = [
	];
}
