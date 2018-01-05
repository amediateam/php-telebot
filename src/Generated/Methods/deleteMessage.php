<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\deleteMessage setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\deleteMessage setMessageId(integer $messageId)
 * @method integer getMessageId()
*/
class deleteMessage extends BaseMethod
{
	protected $method = 'deleteMessage';
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
	];
	static protected $defaultData = [
	];
}
