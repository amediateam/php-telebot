<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendChatAction setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\sendChatAction setAction(string $action)
 * @method string getAction()
*/
class sendChatAction extends BaseMethod
{
	static protected $requiredParams = [
		'chat_id',
		'action'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'action' => 'string',
	];
	static protected $defaultData = [
	];
}
