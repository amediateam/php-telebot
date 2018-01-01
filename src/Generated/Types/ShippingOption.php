<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ShippingOption setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\ShippingOption setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\ShippingOption setPrices(\TelegramBot\Api\Types\LabeledPrice[] $prices)
 * @method \TelegramBot\Api\Types\LabeledPrice[] getPrices()
*/
class ShippingOption extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'title',
		'prices'
	];
	static protected $map = [
		'id' => 'string',
		'title' => 'string',
		'prices' => \TelegramBot\Api\Iterators\ArrayOfLabeledPrice::class,
	];
	static protected $defaultData = [
	];
}
