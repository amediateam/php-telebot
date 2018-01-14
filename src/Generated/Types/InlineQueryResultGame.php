<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setType(string $type = 'game')
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setDocumentUrl(string $documentUrl)
 * @method string getDocumentUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultGame setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
*/
class InlineQueryResultGame extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'document_url',
		'title'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'document_url' => 'string',
		'mime_type' => 'string',
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
