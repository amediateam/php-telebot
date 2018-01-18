<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Video setFileId(string $fileId)
 * @method string getFileId()
 * @method \TelegramBot\Api\Types\Video setWidth(integer $width)
 * @method integer getWidth()
 * @method \TelegramBot\Api\Types\Video setHeight(integer $height)
 * @method integer getHeight()
 * @method \TelegramBot\Api\Types\Video setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Types\Video setThumb(\TelegramBot\Api\Types\PhotoSize $thumb)
 * @method \TelegramBot\Api\Types\PhotoSize getThumb()
 * @method \TelegramBot\Api\Types\Video setMimeType(string $mimeType)
 * @method string getMimeType()
 * @method \TelegramBot\Api\Types\Video setFileSize(integer $fileSize)
 * @method integer getFileSize()
*/
class Video extends BaseType implements TypeInterface
{
public static $name = 'Video';
	static protected $requiredParams = [
		'file_id',
		'width',
		'height',
		'duration'
	];
	static protected $map = [
		'file_id' => 'string',
		'width' => 'integer',
		'height' => 'integer',
		'duration' => 'integer',
		'thumb' => \TelegramBot\Api\Types\PhotoSize::class,
		'mime_type' => 'string',
		'file_size' => 'integer',
	];
	static protected $defaultData = [
	];
}
