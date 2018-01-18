<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendMediaGroup setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendMediaGroup setMedia(\TelegramBot\Api\Types\InputMedia[] $media)
 * @method \TelegramBot\Api\Types\InputMedia[] getMedia()
 * @method \TelegramBot\Api\Methods\sendMediaGroup setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Methods\sendMediaGroup setLength(integer $length)
 * @method integer getLength()
 * @method \TelegramBot\Api\Methods\sendMediaGroup setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendMediaGroup setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
*/
class sendMediaGroup extends BaseMethod
{
	public static $method = 'sendMediaGroup';
	static protected $requiredParams = [
		'chat_id',
		'media'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'media' => \TelegramBot\Api\Iterators\ArrayOfInputMedia::class,
		'duration' => 'integer',
		'length' => 'integer',
		'disable_notification' => 'boolean',
		'reply_to_message_id' => 'integer',
	];
	static protected $defaultData = [
	];
}
