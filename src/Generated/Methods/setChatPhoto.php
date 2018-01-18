<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\setChatPhoto setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\setChatPhoto setPhoto(\TelegramBot\Api\Extension\InputFile $photo)
 * @method \TelegramBot\Api\Extension\InputFile getPhoto()
*/
class setChatPhoto extends BaseMethod
{
	public static $method = 'setChatPhoto';
	static protected $requiredParams = [
		'chat_id',
		'photo'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'photo' => \TelegramBot\Api\Extension\InputFile::class,
	];
	static protected $defaultData = [
	];
}
