<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setVoiceUrl(string $voiceUrl)
 * @method string getVoiceUrl()
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setVoiceDuration(integer $voiceDuration)
 * @method integer getVoiceDuration()
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setInputMessageContent(\TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent)
 * @method \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent getInputMessageContent()
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
 * @method \TelegramBot\Api\Types\InlineQueryResultVoice setType(string $type = 'voice')
 * @method string getType()
*/
class InlineQueryResultVoice extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'voice_url',
		'title'
	];
	static protected $map = [
		'id' => 'string',
		'voice_url' => 'string',
		'title' => 'string',
		'caption' => 'string',
		'voice_duration' => 'integer',
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
		'type' => 'voice'
	];
}
