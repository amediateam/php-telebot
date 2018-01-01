<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\File setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\File setFileSize(integer $fileSize)
 * @method integer getFileSize()
 * @method \TelegramBot\Api\Types\File setFilePath(string $filePath)
 * @method string getFilePath()
*/
class File extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'file_id'
	];
	static protected $map = [
		'file_id' => 'string',
		'file_size' => 'integer',
		'file_path' => 'string',
	];
	static protected $defaultData = [
	];
}
