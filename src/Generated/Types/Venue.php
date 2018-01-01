<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Venue setLocation(\TelegramBot\Api\Types\Location $location)
 * @method \TelegramBot\Api\Types\Location getLocation()
 * @method \TelegramBot\Api\Types\Venue setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\Venue setAddress(string $address)
 * @method string getAddress()
 * @method \TelegramBot\Api\Types\Venue setFoursquareId(string $foursquareId)
 * @method string getFoursquareId()
*/
class Venue extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'location',
		'title',
		'address'
	];
	static protected $map = [
		'location' => \TelegramBot\Api\Types\Location::class,
		'title' => 'string',
		'address' => 'string',
		'foursquare_id' => 'string',
	];
	static protected $defaultData = [
	];
}
