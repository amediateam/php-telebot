<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendContact setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\sendContact setPhoneNumber(string $phoneNumber)
 * @method string getPhoneNumber()
 * @method \TelegramBot\Api\Methods\sendContact setFirstName(string $firstName)
 * @method string getFirstName()
 * @method \TelegramBot\Api\Methods\sendContact setLastName(string $lastName)
 * @method string getLastName()
 * @method \TelegramBot\Api\Methods\sendContact setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendContact setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendContact setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendContact extends BaseMethod
{
	public static $method = 'sendContact';
	static protected $requiredParams = [
		'chat_id',
		'phone_number',
		'first_name'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'phone_number' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
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
