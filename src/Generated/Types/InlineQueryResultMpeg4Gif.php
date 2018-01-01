<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setMpeg4Url(string $mpeg4Url)
 * @method string getMpeg4Url()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setMpeg4Width(integer $mpeg4Width)
 * @method integer getMpeg4Width()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setMpeg4Height(integer $mpeg4Height)
 * @method integer getMpeg4Height()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setMpeg4Duration(integer $mpeg4Duration)
 * @method integer getMpeg4Duration()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
*/
class InlineQueryResultMpeg4Gif extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'mpeg4_url'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'mpeg4_url' => 'string',
		'mpeg4_width' => 'integer',
		'mpeg4_height' => 'integer',
		'mpeg4_duration' => 'integer',
		'thumb_url' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
	];
	static protected $defaultData = [
	];
}
