<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Invoice setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\Invoice setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\Invoice setStartParameter(string $startParameter)
 * @method string getStartParameter()
 * @method \TelegramBot\Api\Types\Invoice setCurrency(string $currency)
 * @method string getCurrency()
 * @method \TelegramBot\Api\Types\Invoice setTotalAmount(integer $totalAmount)
 * @method integer getTotalAmount()
*/
class Invoice extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'title',
		'description',
		'start_parameter',
		'currency',
		'total_amount'
	];
	static protected $map = [
		'title' => 'string',
		'description' => 'string',
		'start_parameter' => 'string',
		'currency' => 'string',
		'total_amount' => 'integer',
	];
	static protected $defaultData = [
	];
}
