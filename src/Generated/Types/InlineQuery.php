<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQuery setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQuery setFrom(\TelegramBot\Api\Types\User $from)
 * @method \TelegramBot\Api\Types\User getFrom()
 * @method \TelegramBot\Api\Types\InlineQuery setLocation(\TelegramBot\Api\Types\Location $location)
 * @method \TelegramBot\Api\Types\Location getLocation()
 * @method \TelegramBot\Api\Types\InlineQuery setQuery(string $query)
 * @method string getQuery()
 * @method \TelegramBot\Api\Types\InlineQuery setOffset(string $offset)
 * @method string getOffset()
*/
class InlineQuery extends BaseType implements TypeInterface
{
public static $name = 'InlineQuery';
	static protected $requiredParams = [
		'id',
		'from',
		'query'
	];
	static protected $map = [
		'id' => 'string',
		'from' => \TelegramBot\Api\Types\User::class,
		'location' => \TelegramBot\Api\Types\Location::class,
		'query' => 'string',
		'offset' => 'string',
	];
	static protected $defaultData = [
	];
}
