<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\deleteChatStickerSet setChatId(integer|string $chatId)
 * @method integer|string getChatId()
*/
class deleteChatStickerSet extends BaseMethod
{
	public static $method = 'deleteChatStickerSet';
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
