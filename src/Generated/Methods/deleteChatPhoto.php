<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\deleteChatPhoto setChatId(integer|string $chatId)
 * @method integer|string getChatId()
*/
class deleteChatPhoto extends BaseMethod
{
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
