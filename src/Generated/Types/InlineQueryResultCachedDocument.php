<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setDocumentFileId(string $documentFileId)
 * @method string getDocumentFileId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedDocument setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
*/
class InlineQueryResultCachedDocument extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'document_file_id'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'title' => 'string',
		'document_file_id' => 'string',
		'description' => 'string',
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
