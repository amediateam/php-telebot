<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\stopMessageLiveLocation setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\stopMessageLiveLocation setMessageId(integer $messageId)
 * @method integer getMessageId()
 * @method \TelegramBot\Api\Methods\stopMessageLiveLocation setInlineMessageId(string $inlineMessageId)
 * @method string getInlineMessageId()
 * @method \TelegramBot\Api\Methods\stopMessageLiveLocation setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class stopMessageLiveLocation extends BaseMethod
{
	protected $method = 'stopMessageLiveLocation';
	static protected $requiredParams = [
		
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
