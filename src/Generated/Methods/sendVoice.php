<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendVoice setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendVoice setVoice(\TelegramBot\Api\Extension\InputFile|string $voice)
 * @method \TelegramBot\Api\Extension\InputFile|string getVoice()
 * @method \TelegramBot\Api\Methods\sendVoice setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Methods\sendVoice setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Methods\sendVoice setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendVoice setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendVoice setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendVoice extends BaseMethod
{
	public static $method = 'sendVoice';
	static protected $requiredParams = [
		'chat_id',
		'voice'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'voice' => [
			\TelegramBot\Api\Extension\InputFile::class,
			'string',
		],
		'caption' => 'string',
		'duration' => 'integer',
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
