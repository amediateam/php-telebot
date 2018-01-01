<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setGifUrl(string $gifUrl)
 * @method string getGifUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setGifWidth(integer $gifWidth)
 * @method integer getGifWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setGifHeight(integer $gifHeight)
 * @method integer getGifHeight()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setGifDuration(integer $gifDuration)
 * @method integer getGifDuration()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultGif setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
*/
class InlineQueryResultGif extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'gif_url'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'gif_url' => 'string',
		'gif_width' => 'integer',
		'gif_height' => 'integer',
		'gif_duration' => 'integer',
		'thumb_url' => 'string',
		'title' => 'string',
		'caption' => 'string',
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
