<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Contact setPhoneNumber(string $phoneNumber)
 * @method string getPhoneNumber()
 * @method \TelegramBot\Api\Types\Contact setFirstName(string $firstName)
 * @method string getFirstName()
 * @method \TelegramBot\Api\Types\Contact setLastName(string $lastName)
 * @method string getLastName()
 * @method \TelegramBot\Api\Types\Contact setUserId(integer $userId)
 * @method integer getUserId()
*/
class Contact extends BaseType implements TypeInterface
{
public static $name = 'Contact';
	static protected $requiredParams = [
		'phone_number',
		'first_name'
	];
	static protected $map = [
		'phone_number' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'user_id' => 'integer',
	];
	static protected $defaultData = [
	];
}
