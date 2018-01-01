<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\deleteStickerFromSet setSticker(string $sticker)
 * @method string getSticker()
*/
class deleteStickerFromSet extends BaseMethod
{
	static protected $requiredParams = [
		'sticker'
	];
	static protected $map = [
		'sticker' => 'string',
	];
	static protected $defaultData = [
	];
}
