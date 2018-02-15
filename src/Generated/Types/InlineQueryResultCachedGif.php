<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setGifFileId(string $gifFileId)
 * @method string getGifFileId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedGif setType(string $type = 'gif')
 * @method string getType()
*/
class InlineQueryResultCachedGif extends BaseType implements TypeInterface
{
public static $name = 'InlineQueryResultCachedGif';
	static protected $requiredParams = [
		'id',
		'gif_file_id'
	];
	static protected $map = [
		'id' => 'string',
		'title' => 'string',
		'gif_file_id' => 'string',
		'description' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
		'type' => 'string',
	];
	static protected $defaultData = [
		'type' => 'gif'
	];
}
