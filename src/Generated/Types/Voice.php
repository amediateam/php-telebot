<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Voice setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\Voice setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Types\Voice setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\Voice setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class Voice extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'file_id',
		'duration'
	];
	static protected $map = [
		'file_id' => 'string',
		'duration' => 'integer',
		'mime_type' => 'string',
		'file_size' => 'integer',
	];
	static protected $defaultData = [
	];
}
