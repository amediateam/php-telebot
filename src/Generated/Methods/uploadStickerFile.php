<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\uploadStickerFile setUserId(integer $userId)
 * @method integer getUserId()
 * @method \TelegramBot\Api\Methods\uploadStickerFile setPngSticker(\TelegramBot\Api\Extension\InputFile $pngSticker)
 * @method \TelegramBot\Api\Extension\InputFile getPngSticker()
*/
class uploadStickerFile extends BaseMethod
{
	public static $method = 'uploadStickerFile';
	static protected $requiredParams = [
		'user_id',
		'png_sticker'
	];
	static protected $map = [
		'user_id' => 'integer',
		'png_sticker' => \TelegramBot\Api\Extension\InputFile::class,
	];
	static protected $defaultData = [
	];
}
