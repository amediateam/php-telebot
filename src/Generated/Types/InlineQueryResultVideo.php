<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setType(string $type = 'video')
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setVideoUrl(string $videoUrl)
 * @method string getVideoUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setVideoWidth(integer $videoWidth)
 * @method integer getVideoWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setVideoHeight(integer $videoHeight)
 * @method integer getVideoHeight()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setVideoDuration(integer $videoDuration)
 * @method integer getVideoDuration()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultVideo setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
*/
class InlineQueryResultVideo extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'video_url',
		'mime_type'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'video_url' => 'string',
		'mime_type' => 'string',
		'thumb_url' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'video_width' => 'integer',
		'video_height' => 'integer',
		'video_duration' => 'integer',
		'description' => 'string',
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
