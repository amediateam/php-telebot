<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\setChatTitle setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\setChatTitle setTitle(string $title)
 * @method string getTitle()
*/
class setChatTitle extends BaseMethod
{
	public static $method = 'setChatTitle';
	static protected $requiredParams = [
		'chat_id',
		'title'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'title' => 'string',
	];
	static protected $defaultData = [
	];
}
