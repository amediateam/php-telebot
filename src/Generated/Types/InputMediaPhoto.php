<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InputMediaPhoto setType(string $type = 'photo')
 * @method string getType()
 * @method \TelegramBot\Api\Types\InputMediaPhoto setMedia(string $media)
 * @method string getMedia()
 * @method \TelegramBot\Api\Types\InputMediaPhoto setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\InputMediaPhoto setParseMode(string $parseMode)
 * @method string getParseMode()
*/
class InputMediaPhoto extends BaseType implements TypeInterface
{
public static $name = 'InputMediaPhoto';
	static protected $requiredParams = [
		'type',
		'media'
	];
	static protected $map = [
		'type' => 'string',
		'media' => 'string',
		'caption' => 'string',
		'parse_mode' => 'string',
	];
	static protected $defaultData = [
		'type' => 'photo'
	];
}
