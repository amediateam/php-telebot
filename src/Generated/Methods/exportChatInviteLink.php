<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\exportChatInviteLink setChatId(integer|string $chatId)
 * @method integer|string getChatId()
*/
class exportChatInviteLink extends BaseMethod
{
	public static $method = 'exportChatInviteLink';
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
