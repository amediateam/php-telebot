<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ShippingQuery setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\ShippingQuery setFrom(\TelegramBot\Api\Types\User $from)
 * @method \TelegramBot\Api\Types\User getFrom()
 * @method \TelegramBot\Api\Types\ShippingQuery setInvoicePayload(string $invoicePayload)
 * @method string getInvoicePayload()
 * @method \TelegramBot\Api\Types\ShippingQuery setShippingAddress(\TelegramBot\Api\Types\ShippingAddress $shippingAddress)
 * @method \TelegramBot\Api\Types\ShippingAddress getShippingAddress()
*/
class ShippingQuery extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'from',
		'invoice_payload',
		'shipping_address'
	];
	static protected $map = [
		'id' => 'string',
		'from' => \TelegramBot\Api\Types\User::class,
		'invoice_payload' => 'string',
		'shipping_address' => \TelegramBot\Api\Types\ShippingAddress::class,
	];
	static protected $defaultData = [
	];
}
