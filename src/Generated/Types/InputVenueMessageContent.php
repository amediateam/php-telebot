<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InputVenueMessageContent setLatitude(float $latitude)
 * @method float getLatitude()
 * @method \TelegramBot\Api\Types\InputVenueMessageContent setLongitude(float $longitude)
 * @method float getLongitude()
 * @method \TelegramBot\Api\Types\InputVenueMessageContent setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\InputVenueMessageContent setAddress(string $address)
 * @method string getAddress()
 * @method \TelegramBot\Api\Types\InputVenueMessageContent setFoursquareId(string $foursquareId)
 * @method string getFoursquareId()
*/
class InputVenueMessageContent extends BaseType implements TypeInterface
{
public static $name = 'InputVenueMessageContent';
	static protected $requiredParams = [
		'latitude',
		'longitude',
		'title',
		'address'
	];
	static protected $map = [
		'latitude' => 'float',
		'longitude' => 'float',
		'title' => 'string',
		'address' => 'string',
		'foursquare_id' => 'string',
	];
	static protected $defaultData = [
	];
}
