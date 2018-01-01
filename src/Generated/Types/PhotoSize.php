<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\PhotoSize setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\PhotoSize setWidth(integer $width)
 * @method integer getWidth()
 * @method \TelegramBot\Api\Types\PhotoSize setHeight(integer $height)
 * @method integer getHeight()
 * @method \TelegramBot\Api\Types\PhotoSize setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class PhotoSize extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'file_id',
		'width',
		'height'
	];
	static protected $map = [
		'file_id' => 'string',
		'width' => 'integer',
		'height' => 'integer',
		'file_size' => 'integer',
	];
	static protected $defaultData = [
	];
}
