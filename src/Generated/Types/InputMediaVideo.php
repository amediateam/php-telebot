<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InputMediaVideo setType(string $type = 'video')
 * @method string getType()
 * @method \TelegramBot\Api\Types\InputMediaVideo setMedia(string $media)
 * @method string getMedia()
 * @method \TelegramBot\Api\Types\InputMediaVideo setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InputMediaVideo setWidth(integer $width)
 * @method integer getWidth()
 * @method \TelegramBot\Api\Types\InputMediaVideo setHeight(integer $height)
 * @method integer getHeight()
 * @method \TelegramBot\Api\Types\InputMediaVideo setDuration(integer $duration)
 * @method integer getDuration()
*/
class InputMediaVideo extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'type',
		'media'
	];
	static protected $map = [
		'type' => 'string',
		'media' => 'string',
		'caption' => 'string',
		'width' => 'integer',
		'height' => 'integer',
		'duration' => 'integer',
	];
	static protected $defaultData = [
	];
}
