<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setGameShortName(string $gameShortName)
 * @method string getGameShortName()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
*/
class InlineQueryResultDocument extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'game_short_name'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'game_short_name' => 'string',
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
	];
	static protected $defaultData = [
	];
}
