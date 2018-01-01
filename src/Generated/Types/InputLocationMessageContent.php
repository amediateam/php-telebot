<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InputLocationMessageContent setLatitude(float $latitude)
 * @method float getLatitude()
 * @method \TelegramBot\Api\Types\InputLocationMessageContent setLongitude(float $longitude)
 * @method float getLongitude()
 * @method \TelegramBot\Api\Types\InputLocationMessageContent setLivePeriod(integer $livePeriod)
 * @method integer getLivePeriod()
*/
class InputLocationMessageContent extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'latitude',
		'longitude'
	];
	static protected $map = [
		'latitude' => 'float',
		'longitude' => 'float',
		'live_period' => 'integer',
	];
	static protected $defaultData = [
	];
}
