<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\setChatDescription setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\setChatDescription setDescription(string $description)
 * @method string getDescription()
*/
class setChatDescription extends BaseMethod
{
	static protected $requiredParams = [
		'chat_id'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'description' => 'string',
	];
	static protected $defaultData = [
	];
}
