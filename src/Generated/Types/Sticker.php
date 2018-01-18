<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Sticker setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\Sticker setWidth(integer $width)
 * @method integer getWidth()
 * @method \TelegramBot\Api\Types\Sticker setHeight(integer $height)
 * @method integer getHeight()
 * @method \TelegramBot\Api\Types\Sticker setThumb(\TelegramBot\Api\Types\PhotoSize $thumb)
 * @method \TelegramBot\Api\Types\PhotoSize getThumb()
 * @method \TelegramBot\Api\Types\Sticker setEmoji(string $emoji)
 * @method string getEmoji()
 * @method \TelegramBot\Api\Types\Sticker setSetName(string $setName)
 * @method string getSetName()
 * @method \TelegramBot\Api\Types\Sticker setMaskPosition(\TelegramBot\Api\Types\MaskPosition $maskPosition)
 * @method \TelegramBot\Api\Types\MaskPosition getMaskPosition()
 * @method \TelegramBot\Api\Types\Sticker setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class Sticker extends BaseType implements TypeInterface
{
public static $name = 'Sticker';
	static protected $requiredParams = [
		'file_id',
		'width',
		'height'
	];
	static protected $map = [
		'file_id' => 'string',
		'width' => 'integer',
		'height' => 'integer',
		'thumb' => \TelegramBot\Api\Types\PhotoSize::class,
		'emoji' => 'string',
		'set_name' => 'string',
		'mask_position' => \TelegramBot\Api\Types\MaskPosition::class,
		'file_size' => 'integer',
	];
	static protected $defaultData = [
	];
}
