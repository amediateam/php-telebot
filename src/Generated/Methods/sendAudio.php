<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendAudio setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendAudio setAudio(\TelegramBot\Api\Extension\InputFile|string $audio)
 * @method \TelegramBot\Api\Extension\InputFile|string getAudio()
 * @method \TelegramBot\Api\Methods\sendAudio setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Methods\sendAudio setPerformer(string $performer)
 * @method string getPerformer()
 * @method \TelegramBot\Api\Methods\sendAudio setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Methods\sendAudio setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Methods\sendAudio setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Methods\sendAudio setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendAudio setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendAudio setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendAudio extends BaseMethod
{
	public static $method = 'sendAudio';
	static protected $requiredParams = [
		'chat_id',
		'audio'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'audio' => [
			\TelegramBot\Api\Extension\InputFile::class,
			'string',
		],
		'duration' => 'integer',
		'performer' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
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
