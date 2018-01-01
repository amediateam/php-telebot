<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ChosenInlineResult setResultId(string $resultId)
 * @method string getResultId()
 * @method \TelegramBot\Api\Types\ChosenInlineResult setFrom(\TelegramBot\Api\Types\User $from)
 * @method \TelegramBot\Api\Types\User getFrom()
 * @method \TelegramBot\Api\Types\ChosenInlineResult setLocation(\TelegramBot\Api\Types\Location $location)
 * @method \TelegramBot\Api\Types\Location getLocation()
 * @method \TelegramBot\Api\Types\ChosenInlineResult setInlineMessageId(string $inlineMessageId)
 * @method string getInlineMessageId()
 * @method \TelegramBot\Api\Types\ChosenInlineResult setQuery(string $query)
 * @method string getQuery()
*/
class ChosenInlineResult extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'result_id',
		'from',
		'query'
	];
	static protected $map = [
		'result_id' => 'string',
		'from' => \TelegramBot\Api\Types\User::class,
		'location' => \TelegramBot\Api\Types\Location::class,
		'inline_message_id' => 'string',
		'query' => 'string',
	];
	static protected $defaultData = [
	];
}
