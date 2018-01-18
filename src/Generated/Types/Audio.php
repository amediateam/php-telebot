<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Audio setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\Audio setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Types\Audio setPerformer(string $performer)
 * @method string getPerformer()
 * @method \TelegramBot\Api\Types\Audio setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\Audio setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\Audio setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class Audio extends BaseType implements TypeInterface
{
public static $name = 'Audio';
	static protected $requiredParams = [
		'file_id',
		'duration'
	];
	static protected $map = [
		'file_id' => 'string',
		'duration' => 'integer',
		'performer' => 'string',
		'title' => 'string',
		'mime_type' => 'string',
		'file_size' => 'integer',
	];
	static protected $defaultData = [
	];
}
