<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\pinChatMessage setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\pinChatMessage setMessageId(integer $messageId)
 * @method integer getMessageId()
 * @method \TelegramBot\Api\Methods\pinChatMessage setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
*/
class pinChatMessage extends BaseMethod
{
	static protected $requiredParams = [
		'chat_id',
		'message_id'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'message_id' => 'integer',
		'disable_notification' => 'boolean',
	];
	static protected $defaultData = [
	];
}
