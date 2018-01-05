<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\getChatAdministrators setChatId(integer|string $chatId)
 * @method integer|string getChatId()
*/
class getChatAdministrators extends BaseMethod
{
	protected $method = 'getChatAdministrators';
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
