<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif setMpeg4FileId(string $mpeg4FileId)
 * @method string getMpeg4FileId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
*/
class InlineQueryResultCachedMpeg4Gif extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'mpeg4_file_id'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'mpeg4_file_id' => 'string',
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
