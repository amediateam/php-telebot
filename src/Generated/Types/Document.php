<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Document setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\Document setThumb(\TelegramBot\Api\Types\PhotoSize $thumb)
 * @method \TelegramBot\Api\Types\PhotoSize getThumb()
 * @method \TelegramBot\Api\Types\Document setFileName(string $fileName)
 * @method string getFileName()
 * @method \TelegramBot\Api\Types\Document setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\Document setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class Document extends BaseType implements TypeInterface
{
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
