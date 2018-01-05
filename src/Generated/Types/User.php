<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\User setId(integer $id)
 * @method integer getId()
 * @method \TelegramBot\Api\Types\User setIsBot(boolean $isBot)
 * @method boolean isBot()
 * @method \TelegramBot\Api\Types\User setFirstName(string $firstName)
 * @method string getFirstName()
 * @method \TelegramBot\Api\Types\User setLastName(string $lastName)
 * @method string getLastName()
 * @method \TelegramBot\Api\Types\User setUsername(string $username)
 * @method string getUsername()
 * @method \TelegramBot\Api\Types\User setLanguageCode(string $languageCode)
 * @method string getLanguageCode()
*/
class User extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id'
	];
	static protected $map = [
		'id' => 'integer',
		'is_bot' => 'boolean',
		'first_name' => 'string',
		'last_name' => 'string',
		'username' => 'string',
		'language_code' => 'string',
	];
	static protected $defaultData = [
	];
}
