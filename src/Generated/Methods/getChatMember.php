<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\getChatMember setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\getChatMember setUserId(integer|string $userId)
 * @method integer|string getUserId()
*/
class getChatMember extends BaseMethod
{
	public static $method = 'getChatMember';
	static protected $requiredParams = [
		'chat_id',
		'user_id'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'user_id' => [
			'integer',
			'string',
		],
	];
	static protected $defaultData = [
	];
}
