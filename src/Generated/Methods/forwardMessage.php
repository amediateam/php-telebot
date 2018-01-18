<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\forwardMessage setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\forwardMessage setFromChatId(integer $fromChatId)
 * @method integer getFromChatId()
 * @method \TelegramBot\Api\Methods\forwardMessage setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\forwardMessage setMessageId(integer $messageId)
 * @method integer getMessageId()
*/
class forwardMessage extends BaseMethod
{
	public static $method = 'forwardMessage';
	static protected $requiredParams = [
		'chat_id',
		'from_chat_id',
		'message_id'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'from_chat_id' => 'integer',
		'disable_notification' => 'boolean',
		'message_id' => 'integer',
	];
	static protected $defaultData = [
	];
}
