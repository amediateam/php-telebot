<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendPhoto setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendPhoto setPhoto(\TelegramBot\Api\Extension\InputFile|string $photo)
 * @method \TelegramBot\Api\Extension\InputFile|string getPhoto()
 * @method \TelegramBot\Api\Methods\sendPhoto setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Methods\sendPhoto setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendPhoto setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendPhoto setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendPhoto extends BaseMethod
{
	protected $method = 'sendPhoto';
	static protected $requiredParams = [
		'chat_id',
		'photo'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'photo' => [
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
