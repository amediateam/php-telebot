<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setLatitude(float $latitude)
 * @method float getLatitude()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setLongitude(float $longitude)
 * @method float getLongitude()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setLivePeriod(integer $livePeriod)
 * @method integer getLivePeriod()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setThumbWidth(integer $thumbWidth)
 * @method integer getThumbWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultLocation setThumbHeight(integer $thumbHeight)
 * @method integer getThumbHeight()
*/
class InlineQueryResultLocation extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'latitude',
		'longitude',
		'title'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'latitude' => 'float',
		'longitude' => 'float',
		'title' => 'string',
		'live_period' => 'integer',
		'thumb_url' => 'string',
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'thumb_width' => 'integer',
		'thumb_height' => 'integer',
	];
	static protected $defaultData = [
	];
}
