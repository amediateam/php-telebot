<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\editMessageCaption setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\editMessageCaption setMessageId(integer $messageId)
 * @method integer getMessageId()
 * @method \TelegramBot\Api\Methods\editMessageCaption setInlineMessageId(string $inlineMessageId)
 * @method string getInlineMessageId()
 * @method \TelegramBot\Api\Methods\editMessageCaption setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Methods\editMessageCaption setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Methods\editMessageCaption setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class editMessageCaption extends BaseMethod
{
	public static $method = 'editMessageCaption';
	static protected $requiredParams = [
		'chat_id',
		'message_id',
		'caption'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'message_id' => 'integer',
		'inline_message_id' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
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
