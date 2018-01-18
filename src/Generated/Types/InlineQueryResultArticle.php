<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setUrl(string $url)
 * @method string getUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setHideUrl(boolean $hideUrl)
 * @method boolean getHideUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setThumbWidth(integer $thumbWidth)
 * @method integer getThumbWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setThumbHeight(integer $thumbHeight)
 * @method integer getThumbHeight()
 * @method \TelegramBot\Api\Types\InlineQueryResultArticle setType(string $type = 'article')
 * @method string getType()
*/
class InlineQueryResultArticle extends BaseType implements TypeInterface
{
public static $name = 'InlineQueryResultArticle';
	static protected $requiredParams = [
		'id',
		'title',
		'input_message_content'
	];
	static protected $map = [
		'id' => 'string',
		'title' => 'string',
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'url' => 'string',
		'hide_url' => 'boolean',
		'description' => 'string',
		'thumb_url' => 'string',
		'thumb_width' => 'integer',
		'thumb_height' => 'integer',
		'type' => 'string',
	];
	static protected $defaultData = [
		'type' => 'article'
	];
}
