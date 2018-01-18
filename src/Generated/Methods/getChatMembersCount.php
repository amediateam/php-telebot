<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\getChatMembersCount setChatId(integer|string $chatId)
 * @method integer|string getChatId()
*/
class getChatMembersCount extends BaseMethod
{
	public static $method = 'getChatMembersCount';
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
