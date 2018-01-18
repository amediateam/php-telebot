<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\PreCheckoutQuery setId(string $id)
 * @method string getId()
 * @method \TelegramBot\Api\Types\PreCheckoutQuery setFrom(\TelegramBot\Api\Types\User $from)
 * @method \TelegramBot\Api\Types\User getFrom()
 * @method \TelegramBot\Api\Types\PreCheckoutQuery setCurrency(string $currency)
 * @method string getCurrency()
 * @method \TelegramBot\Api\Types\PreCheckoutQuery setTotalAmount(integer $totalAmount)
 * @method integer getTotalAmount()
 * @method \TelegramBot\Api\Types\PreCheckoutQuery setInvoicePayload(string $invoicePayload)
 * @method string getInvoicePayload()
 * @method \TelegramBot\Api\Types\PreCheckoutQuery setShippingOptionId(string $shippingOptionId)
 * @method string getShippingOptionId()
 * @method \TelegramBot\Api\Types\PreCheckoutQuery setOrderInfo(\TelegramBot\Api\Types\OrderInfo $orderInfo)
 * @method \TelegramBot\Api\Types\OrderInfo getOrderInfo()
*/
class PreCheckoutQuery extends BaseType implements TypeInterface
{
public static $name = 'PreCheckoutQuery';
	static protected $requiredParams = [
		'id',
		'from',
		'currency',
		'total_amount',
		'invoice_payload'
	];
	static protected $map = [
		'id' => 'string',
		'from' => \TelegramBot\Api\Types\User::class,
		'currency' => 'string',
		'total_amount' => 'integer',
		'invoice_payload' => 'string',
		'shipping_option_id' => 'string',
		'order_info' => \TelegramBot\Api\Types\OrderInfo::class,
	];
	static protected $defaultData = [
	];
}
