<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedSticker setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedSticker setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedSticker setStickerFileId(string $stickerFileId)
 * @method string getStickerFileId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedSticker setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedSticker setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
*/
class InlineQueryResultCachedSticker extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'id',
		'sticker_file_id'
	];
	static protected $map = [
		'type' => 'string',
		'id' => 'string',
		'sticker_file_id' => 'string',
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
