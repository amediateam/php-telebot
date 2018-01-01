<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\unbanChatMember setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\unbanChatMember setUserId(integer|string $userId)
 * @method integer|string getUserId()
*/
class unbanChatMember extends BaseMethod
{
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
