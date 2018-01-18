<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendDocument setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendDocument setDocument(\TelegramBot\Api\Extension\InputFile|string $document)
 * @method \TelegramBot\Api\Extension\InputFile|string getDocument()
 * @method \TelegramBot\Api\Methods\sendDocument setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Methods\sendDocument setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendDocument setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendDocument setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendDocument extends BaseMethod
{
	public static $method = 'sendDocument';
	static protected $requiredParams = [
		'chat_id',
		'document'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'document' => [
			\TelegramBot\Api\Extension\InputFile::class,
			'string',
		],
		'caption' => 'string',
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
