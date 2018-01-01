<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\VideoNote setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\VideoNote setLength(integer $length)
 * @method integer getLength()
 * @method \TelegramBot\Api\Types\VideoNote setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Types\VideoNote setThumb(\TelegramBot\Api\Types\PhotoSize $thumb)
 * @method \TelegramBot\Api\Types\PhotoSize getThumb()
 * @method \TelegramBot\Api\Types\VideoNote setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class VideoNote extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'file_id',
		'length',
		'duration'
	];
	static protected $map = [
		'file_id' => 'string',
		'length' => 'integer',
		'duration' => 'integer',
		'thumb' => \TelegramBot\Api\Types\PhotoSize::class,
		'file_size' => 'integer',
	];
	static protected $defaultData = [
	];
}
