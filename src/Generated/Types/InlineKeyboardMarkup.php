<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup setInlineKeyboard(\TelegramBot\Api\Types\ArrayOfInlineKeyboardButton[] $inlineKeyboard)
 * @method \TelegramBot\Api\Types\ArrayOfInlineKeyboardButton[] getInlineKeyboard()
*/
class InlineKeyboardMarkup extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'inline_keyboard'
	];
	static protected $map = [
		'inline_keyboard' => \TelegramBot\Api\Iterators\ArrayOfArrayOfInlineKeyboardButton::class,
	];
	static protected $defaultData = [
	];
}
