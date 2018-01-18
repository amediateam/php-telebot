<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup setInlineKeyboard(\TelegramBot\Api\Types\InlineKeyboardButton[] $inlineKeyboard)
 * @method \TelegramBot\Api\Types\InlineKeyboardButton[] getInlineKeyboard()
*/
class InlineKeyboardMarkup extends BaseType implements TypeInterface
{
public static $name = 'InlineKeyboardMarkup';
	static protected $requiredParams = [
		'inline_keyboard'
	];
	static protected $map = [
		'inline_keyboard' => \TelegramBot\Api\Iterators\ArrayOfArrayOfInlineKeyboardButton::class,
	];
	static protected $defaultData = [
	];
}
