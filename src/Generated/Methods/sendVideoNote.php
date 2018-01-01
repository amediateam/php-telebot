<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendVideoNote setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendVideoNote setVideoNote(\TelegramBot\Api\Extension\InputFile|string $videoNote)
 * @method \TelegramBot\Api\Extension\InputFile|string getVideoNote()
 * @method \TelegramBot\Api\Methods\sendVideoNote setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Methods\sendVideoNote setLength(integer $length)
 * @method integer getLength()
 * @method \TelegramBot\Api\Methods\sendVideoNote setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendVideoNote setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendVideoNote setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendVideoNote extends BaseMethod
{
	static protected $requiredParams = [
		'chat_id',
		'video_note'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'video_note' => [
			\TelegramBot\Api\Extension\InputFile::class,
			'string',
		],
		'duration' => 'integer',
		'length' => 'integer',
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
