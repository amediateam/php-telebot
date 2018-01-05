<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendLocation setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\sendLocation setLatitude(float $latitude)
 * @method float getLatitude()
 * @method \TelegramBot\Api\Methods\sendLocation setLongitude(float $longitude)
 * @method float getLongitude()
 * @method \TelegramBot\Api\Methods\sendLocation setLivePeriod(integer $livePeriod)
 * @method integer getLivePeriod()
 * @method \TelegramBot\Api\Methods\sendLocation setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendLocation setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendLocation setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendLocation extends BaseMethod
{
	protected $method = 'sendLocation';
	static protected $requiredParams = [
		'chat_id',
		'latitude',
		'longitude'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'latitude' => 'float',
		'longitude' => 'float',
		'live_period' => 'integer',
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
