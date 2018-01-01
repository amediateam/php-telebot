<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ReplyKeyboardMarkup setKeyboard(\TelegramBot\Api\Types\ArrayOfKeyboardButton[] $keyboard)
 * @method \TelegramBot\Api\Types\ArrayOfKeyboardButton[] getKeyboard()
 * @method \TelegramBot\Api\Types\ReplyKeyboardMarkup setResizeKeyboard(boolean $resizeKeyboard)
 * @method boolean getResizeKeyboard()
 * @method \TelegramBot\Api\Types\ReplyKeyboardMarkup setOneTimeKeyboard(boolean $oneTimeKeyboard)
 * @method boolean getOneTimeKeyboard()
 * @method \TelegramBot\Api\Types\ReplyKeyboardMarkup setSelective(boolean $selective)
 * @method boolean getSelective()
*/
class ReplyKeyboardMarkup extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'keyboard'
	];
	static protected $map = [
		'keyboard' => \TelegramBot\Api\Iterators\ArrayOfArrayOfKeyboardButton::class,
		'resize_keyboard' => 'boolean',
		'one_time_keyboard' => 'boolean',
		'selective' => 'boolean',
	];
	static protected $defaultData = [
	];
}
