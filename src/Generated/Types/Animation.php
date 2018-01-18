<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Animation setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\Animation setThumb(\TelegramBot\Api\Types\PhotoSize $thumb)
 * @method \TelegramBot\Api\Types\PhotoSize getThumb()
 * @method \TelegramBot\Api\Types\Animation setFileName(string $fileName)
 * @method string getFileName()
 * @method \TelegramBot\Api\Types\Animation setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\Animation setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class Animation extends BaseType implements TypeInterface
{
public static $name = 'Animation';
	static protected $requiredParams = [
		'file_id'
	];
	static protected $map = [
		'file_id' => 'string',
		'thumb' => \TelegramBot\Api\Types\PhotoSize::class,
		'file_name' => 'string',
		'mime_type' => 'string',
		'file_size' => 'integer',
	];
	static protected $defaultData = [
	];
}
