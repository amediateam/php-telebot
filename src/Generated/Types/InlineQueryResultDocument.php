<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setDocumentUrl(string $documentUrl)
 * @method string getDocumentUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setInputMessageContent(InputMessageContent $inputMessageContent)
 * @method InputMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setThumbUrl(string $thumbUrl)
 * @method string getThumbUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setThumbWidth(integer $thumbWidth)
 * @method integer getThumbWidth()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setThumbHeight(integer $thumbHeight)
 * @method integer getThumbHeight()
 * @method \TelegramBot\Api\Types\InlineQueryResultDocument setType(string $type = 'document')
 * @method string getType()
*/
class InlineQueryResultDocument extends BaseType implements TypeInterface
{
public static $name = 'InlineQueryResultDocument';
	static protected $requiredParams = [
		'id',
		'title',
		'mime_type',
		'document_url'
	];
	static protected $map = [
		'id' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
		'document_url' => 'string',
		'mime_type' => 'string',
		'description' => 'string',
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'input_message_content' => InputMessageContent,
		'thumb_url' => 'string',
		'thumb_width' => 'integer',
		'thumb_height' => 'integer',
		'type' => 'string',
	];
	static protected $defaultData = [
		'type' => 'document'
	];
}
