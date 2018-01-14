<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setType(string $type = 'contact')
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setPhoneNumber(string $phoneNumber)
 * @method string getPhoneNumber()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setFirstName(string $firstName)
 * @method string getFirstName()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setLastName(string $lastName)
 * @method string getLastName()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setThumbWidth(integer $thumbWidth)
 * @method integer getThumbWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setThumbHeight(integer $thumbHeight)
 * @method integer getThumbHeight()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultContact setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
*/
class InlineQueryResultContact extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'phone_number',
		'first_name'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'phone_number' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'thumb_url' => 'string',
		'thumb_width' => 'integer',
		'thumb_height' => 'integer',
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
	];
	static protected $defaultData = [
	];
}
