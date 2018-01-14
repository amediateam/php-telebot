<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQueryResult setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQueryResult setType(string $type)
 * @method string getType()
*/
class InlineQueryResult extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'type'
	];
	static protected $map = [
		'id' => 'string',
		'type' => 'string',
	];
	static protected $defaultData = [
	];
}
