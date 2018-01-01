<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ReplyKeyboardRemove setRemoveKeyboard(boolean $removeKeyboard)
 * @method boolean getRemoveKeyboard()
 * @method \TelegramBot\Api\Types\ReplyKeyboardRemove setSelective(boolean $selective)
 * @method boolean getSelective()
*/
class ReplyKeyboardRemove extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'remove_keyboard'
	];
	static protected $map = [
		'remove_keyboard' => 'boolean',
		'selective' => 'boolean',
	];
	static protected $defaultData = [
	];
}
