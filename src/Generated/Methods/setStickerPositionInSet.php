<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\setStickerPositionInSet setSticker(string $sticker)
 * @method string getSticker()
 * @method \TelegramBot\Api\Methods\setStickerPositionInSet setPosition(integer $position)
 * @method integer getPosition()
*/
class setStickerPositionInSet extends BaseMethod
{
	static protected $requiredParams = [
		'sticker',
		'position'
	];
	static protected $map = [
		'sticker' => 'string',
		'position' => 'integer',
	];
	static protected $defaultData = [
	];
}
