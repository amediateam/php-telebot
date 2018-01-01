<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendVenue setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\sendVenue setLatitude(float $latitude)
 * @method float getLatitude()
 * @method \TelegramBot\Api\Methods\sendVenue setLongitude(float $longitude)
 * @method float getLongitude()
 * @method \TelegramBot\Api\Methods\sendVenue setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Methods\sendVenue setAddress(string $address)
 * @method string getAddress()
 * @method \TelegramBot\Api\Methods\sendVenue setFoursquareId(string $foursquareId)
 * @method string getFoursquareId()
 * @method \TelegramBot\Api\Methods\sendVenue setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendVenue setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendVenue setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendVenue extends BaseMethod
{
	static protected $requiredParams = [
		'chat_id',
		'latitude',
		'longitude',
		'title',
		'address'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'latitude' => 'float',
		'longitude' => 'float',
		'title' => 'string',
		'address' => 'string',
		'foursquare_id' => 'string',
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
