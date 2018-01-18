<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setAudioUrl(string $audioUrl)
 * @method string getAudioUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setPerformer(string $performer)
 * @method string getPerformer()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setAudioDuration(integer $audioDuration)
 * @method integer getAudioDuration()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultAudio setType(string $type = 'audio')
 * @method string getType()
*/
class InlineQueryResultAudio extends BaseType implements TypeInterface
{
public static $name = 'InlineQueryResultAudio';
	static protected $requiredParams = [
		'id',
		'title',
		'audio_url'
	];
	static protected $map = [
		'id' => 'string',
		'audio_url' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'performer' => 'string',
		'audio_duration' => 'integer',
		'input_message_content' => [
			\TelegramBot\Api\Types\InputTextMessageContent::class,
			\TelegramBot\Api\Types\InputLocationMessageContent::class,
			\TelegramBot\Api\Types\InputVenueMessageContent::class,
			\TelegramBot\Api\Types\InputContactMessageContent::class,
		],
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
		'type' => 'string',
	];
	static protected $defaultData = [
		'type' => 'audio'
	];
}
