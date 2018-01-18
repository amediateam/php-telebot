<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\setChatStickerSet setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\setChatStickerSet setStickerSetName(string $stickerSetName)
 * @method string getStickerSetName()
*/
class setChatStickerSet extends BaseMethod
{
	public static $method = 'setChatStickerSet';
	static protected $requiredParams = [
		'chat_id',
		'sticker_set_name'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'sticker_set_name' => 'string',
	];
	static protected $defaultData = [
	];
}
