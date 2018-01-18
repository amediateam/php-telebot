<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\editMessageReplyMarkup setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\editMessageReplyMarkup setMessageId(integer $messageId)
 * @method integer getMessageId()
 * @method \TelegramBot\Api\Methods\editMessageReplyMarkup setInlineMessageId(string $inlineMessageId)
 * @method string getInlineMessageId()
 * @method \TelegramBot\Api\Methods\editMessageReplyMarkup setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class editMessageReplyMarkup extends BaseMethod
{
	public static $method = 'editMessageReplyMarkup';
	static protected $requiredParams = [
		'chat_id',
		'message_id',
		'reply_markup'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'message_id' => 'integer',
		'inline_message_id' => 'string',
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
