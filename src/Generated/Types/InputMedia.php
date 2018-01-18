<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InputMedia setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\InputMedia setMedia(string $media)
 * @method string getMedia()
*/
class InputMedia extends BaseType implements TypeInterface
{
public static $name = 'InputMedia';
	static protected $requiredParams = [
		'type',
		'media'
	];
	static protected $map = [
		'type' => 'string',
		'media' => 'string',
	];
	static protected $defaultData = [
	];
}
