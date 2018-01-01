<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\createNewStickerSet setUserId(integer $userId)
 * @method integer getUserId()
 * @method \TelegramBot\Api\Methods\createNewStickerSet setName(string $name)
 * @method string getName()
 * @method \TelegramBot\Api\Methods\createNewStickerSet setPngSticker(\TelegramBot\Api\Extension\InputFile|string $pngSticker)
 * @method \TelegramBot\Api\Extension\InputFile|string getPngSticker()
 * @method \TelegramBot\Api\Methods\createNewStickerSet setEmojis(string $emojis)
 * @method string getEmojis()
 * @method \TelegramBot\Api\Methods\createNewStickerSet setContainsMasks(boolean $containsMasks)
 * @method boolean getContainsMasks()
 * @method \TelegramBot\Api\Methods\createNewStickerSet setMaskPosition(\TelegramBot\Api\Types\MaskPosition $maskPosition)
 * @method \TelegramBot\Api\Types\MaskPosition getMaskPosition()
*/
class createNewStickerSet extends BaseMethod
{
	static protected $requiredParams = [
		'user_id',
		'name',
		'png_sticker',
		'emojis'
	];
	static protected $map = [
		'user_id' => 'integer',
		'name' => 'string',
		'png_sticker' => [
			\TelegramBot\Api\Extension\InputFile::class,
			'string',
		],
		'emojis' => 'string',
		'contains_masks' => 'boolean',
		'mask_position' => \TelegramBot\Api\Types\MaskPosition::class,
	];
	static protected $defaultData = [
	];
}
