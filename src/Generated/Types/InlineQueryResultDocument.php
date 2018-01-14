<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setGameShortName(string $gameShortName)
 * @method string getGameShortName()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setType(string $type = 'document')
 * @method string getType()
*/
class InlineQueryResultDocument extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'game_short_name'
	];
	static protected $map = [
		'id' => 'string',
		'game_short_name' => 'string',
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'type' => 'string',
	];
	static protected $defaultData = [
		'type' => 'document'
	];
}
