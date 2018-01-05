<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\kickChatMember setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\kickChatMember setUserId(integer|string $userId)
 * @method integer|string getUserId()
 * @method \TelegramBot\Api\Methods\kickChatMember setUntilDate(integer $untilDate)
 * @method integer getUntilDate()
*/
class kickChatMember extends BaseMethod
{
	protected $method = 'kickChatMember';
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
		'until_date' => 'integer',
	];
	static protected $defaultData = [
	];
}
