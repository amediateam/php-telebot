<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendVideo setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendVideo setVideo(\TelegramBot\Api\Extension\InputFile|string $video)
 * @method \TelegramBot\Api\Extension\InputFile|string getVideo()
 * @method \TelegramBot\Api\Methods\sendVideo setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Methods\sendVideo setWidth(integer $width)
 * @method integer getWidth()
 * @method \TelegramBot\Api\Methods\sendVideo setHeight(integer $height)
 * @method integer getHeight()
 * @method \TelegramBot\Api\Methods\sendVideo setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Methods\sendVideo setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendVideo setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendVideo setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendVideo extends BaseMethod
{
	static protected $requiredParams = [
		'chat_id',
		'video'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'video' => [
			\TelegramBot\Api\Extension\InputFile::class,
			'string',
		],
		'duration' => 'integer',
		'width' => 'integer',
		'height' => 'integer',
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
