<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendSticker setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendSticker setSticker(\TelegramBot\Api\Extension\InputFile|string $sticker)
 * @method \TelegramBot\Api\Extension\InputFile|string getSticker()
 * @method \TelegramBot\Api\Methods\sendSticker setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendSticker setReplyToMessageId(boolean $replyToMessageId)
 * @method boolean getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendSticker setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class sendSticker extends BaseMethod
{
	protected $method = 'sendSticker';
	static protected $requiredParams = [
		'chat_id',
		'sticker'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'sticker' => [
			\TelegramBot\Api\Extension\InputFile::class,
			'string',
		],
		'disable_notification' => 'boolean',
		'reply_to_message_id' => 'boolean',
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
