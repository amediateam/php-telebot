<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\unpinChatMessage setChatId(integer|string $chatId)
 * @method integer|string getChatId()
*/
class unpinChatMessage extends BaseMethod
{
	public static $method = 'unpinChatMessage';
	static protected $requiredParams = [
		'chat_id'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
	];
	static protected $defaultData = [
	];
}
