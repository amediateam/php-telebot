<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setType(string $type = 'venue')
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setLatitude(float $latitude)
 * @method float getLatitude()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setLongitude(float $longitude)
 * @method float getLongitude()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setAddress(integer $address)
 * @method integer getAddress()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setThumbWidth(integer $thumbWidth)
 * @method integer getThumbWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultVenue setThumbHeight(integer $thumbHeight)
 * @method integer getThumbHeight()
*/
class InlineQueryResultVenue extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'latitude',
		'longitude',
		'title',
		'address'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'latitude' => 'float',
		'longitude' => 'float',
		'title' => 'string',
		'address' => 'integer',
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'thumb_url' => 'string',
		'thumb_width' => 'integer',
		'thumb_height' => 'integer',
	];
	static protected $defaultData = [
	];
}
