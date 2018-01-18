<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\LabeledPrice setLabel(string $label)
 * @method string getLabel()
 * @method \TelegramBot\Api\Types\LabeledPrice setAmount(integer $amount)
 * @method integer getAmount()
*/
class LabeledPrice extends BaseType implements TypeInterface
{
public static $name = 'LabeledPrice';
	static protected $requiredParams = [
		'label',
		'amount'
	];
	static protected $map = [
		'label' => 'string',
		'amount' => 'integer',
	];
	static protected $defaultData = [
	];
}
