<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\leaveChat setChatId(integer|string $chatId)
 * @method integer|string getChatId()
*/
class leaveChat extends BaseMethod
{
	public static $method = 'leaveChat';
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
