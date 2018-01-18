<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Location setLongitude(float $longitude)
 * @method float getLongitude()
 * @method \TelegramBot\Api\Types\Location setLatitude(float $latitude)
 * @method float getLatitude()
*/
class Location extends BaseType implements TypeInterface
{
public static $name = 'Location';
	static protected $requiredParams = [
		'longitude',
		'latitude'
	];
	static protected $map = [
		'longitude' => 'float',
		'latitude' => 'float',
	];
	static protected $defaultData = [
	];
}
