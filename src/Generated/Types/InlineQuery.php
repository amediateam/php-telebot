<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InlineQuery setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\InlineQuery setFrom(\TelegramBot\Api\Types\User $from)
 * @method \TelegramBot\Api\Types\User getFrom()
*/
class InlineQuery extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'from'
	];
	static protected $map = [
		'id' => 'string',
		'from' => \TelegramBot\Api\Types\User::class,
	];
	static protected $defaultData = [
	];
}
