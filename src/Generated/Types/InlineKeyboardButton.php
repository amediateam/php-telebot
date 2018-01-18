<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineKeyboardButton setText(string $text)
 * @method string getText()
 * @method \TelegramBot\Api\Types\InlineKeyboardButton setUrl(string $url)
 * @method string getUrl()
 * @method \TelegramBot\Api\Types\InlineKeyboardButton setCallbackData(string $callbackData)
 * @method string getCallbackData()
 * @method \TelegramBot\Api\Types\InlineKeyboardButton setSwitchInlineQuery(string $switchInlineQuery)
 * @method string getSwitchInlineQuery()
 * @method \TelegramBot\Api\Types\InlineKeyboardButton setSwitchInlineQueryCurrentChat(string $switchInlineQueryCurrentChat)
 * @method string getSwitchInlineQueryCurrentChat()
 * @method \TelegramBot\Api\Types\InlineKeyboardButton setCallbackGame(\TelegramBot\Api\Types\CallbackGame $callbackGame)
 * @method \TelegramBot\Api\Types\CallbackGame getCallbackGame()
 * @method \TelegramBot\Api\Types\InlineKeyboardButton setPay(boolean $pay)
 * @method boolean getPay()
*/
class InlineKeyboardButton extends BaseType implements TypeInterface
{
public static $name = 'InlineKeyboardButton';
	static protected $requiredParams = [
		'text'
	];
	static protected $map = [
		'text' => 'string',
		'url' => 'string',
		'callback_data' => 'string',
		'switch_inline_query' => 'string',
		'switch_inline_query_current_chat' => 'string',
		'callback_game' => \TelegramBot\Api\Types\CallbackGame::class,
		'pay' => 'boolean',
	];
	static protected $defaultData = [
	];
}
