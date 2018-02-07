<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendMessage setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendMessage setText(string $text)
 * @method string getText()
 * @method \TelegramBot\Api\Methods\sendMessage setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Methods\sendMessage setDisableWebPagePreview(boolean $disableWebPagePreview)
 * @method boolean getDisableWebPagePreview()
 * @method \TelegramBot\Api\Methods\sendMessage setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendMessage setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendMessage setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendMessage extends BaseMethod
{
	public static $method = 'sendMessage';
	static protected $requiredParams = [
		'chat_id',
		'text'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'text' => 'string',
		'parse_mode' => 'string',
		'disable_web_page_preview' => 'boolean',
		'disable_notification' => 'boolean',
		'reply_to_message_id' => 'integer',
		'reply_markup' => [
			\TelegramBot\Api\Types\InlineKeyboardMarkup::class,
			\TelegramBot\Api\Types\ReplyKeyboardMarkup::class,
			\TelegramBot\Api\Types\ReplyKeyboardRemove::class,
			\TelegramBot\Api\Types\ForceReply::class,
		],
	];
	static protected $defaultData = [
	];
}
