<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedAudio setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedAudio setAudioFileId(string $audioFileId)
 * @method string getAudioFileId()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedAudio setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedAudio setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedAudio setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedAudio setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultCachedAudio setType(string $type = 'audio')
 * @method string getType()
*/
class InlineQueryResultCachedAudio extends BaseType implements TypeInterface
{
public static $name = 'InlineQueryResultCachedAudio';
	static protected $requiredParams = [
		'id',
		'audio_file_id'
	];
	static protected $map = [
		'id' => 'string',
		'audio_file_id' => 'string',
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
		'type' => 'audio'
	];
}
