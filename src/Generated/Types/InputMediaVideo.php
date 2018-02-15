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
 * @method \TelegramBot\Api\Types\InputMediaVideo setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Types\InputMediaVideo setWidth(integer $width)
 * @method integer getWidth()
 * @method \TelegramBot\Api\Types\InputMediaVideo setHeight(integer $height)
 * @method integer getHeight()
 * @method \TelegramBot\Api\Types\InputMediaVideo setDuration(integer $duration)
 * @method integer getDuration()
 * @method \TelegramBot\Api\Types\InputMediaVideo setSupportsStreaming(boolean $supportsStreaming)
 * @method boolean getSupportsStreaming()
*/
class InputMediaVideo extends BaseType implements TypeInterface
{
public static $name = 'InputMediaVideo';
	static protected $requiredParams = [
		'type',
		'media'
	];
	static protected $map = [
		'type' => 'string',
		'media' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
		'width' => 'integer',
		'height' => 'integer',
		'duration' => 'integer',
		'supports_streaming' => 'boolean',
	];
	static protected $defaultData = [
		'type' => 'video'
	];
}
