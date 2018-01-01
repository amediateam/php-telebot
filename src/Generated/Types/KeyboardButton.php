<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\KeyboardButton setText(string $text)
 * @method string getText()
 * @method \TelegramBot\Api\Types\KeyboardButton setRequestContact(boolean $requestContact)
 * @method boolean getRequestContact()
 * @method \TelegramBot\Api\Types\KeyboardButton setRequestLocation(boolean $requestLocation)
 * @method boolean getRequestLocation()
*/
class KeyboardButton extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'text'
	];
	static protected $map = [
		'text' => 'string',
		'request_contact' => 'boolean',
		'request_location' => 'boolean',
	];
	static protected $defaultData = [
	];
}
