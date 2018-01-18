<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\getStickerSet setName(string $name)
 * @method string getName()
*/
class getStickerSet extends BaseMethod
{
	public static $method = 'getStickerSet';
	static protected $requiredParams = [
		'name'
	];
	static protected $map = [
		'name' => 'string',
	];
	static protected $defaultData = [
	];
}
