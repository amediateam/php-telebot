<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\SuccessfulPayment setCurrency(string $currency)
 * @method string getCurrency()
 * @method \TelegramBot\Api\Types\SuccessfulPayment setTotalAmount(integer $totalAmount)
 * @method integer getTotalAmount()
 * @method \TelegramBot\Api\Types\SuccessfulPayment setInvoicePayload(string $invoicePayload)
 * @method string getInvoicePayload()
 * @method \TelegramBot\Api\Types\SuccessfulPayment setShippingOptionId(string $shippingOptionId)
 * @method string getShippingOptionId()
 * @method \TelegramBot\Api\Types\SuccessfulPayment setOrderInfo(\TelegramBot\Api\Types\OrderInfo $orderInfo)
 * @method \TelegramBot\Api\Types\OrderInfo getOrderInfo()
 * @method \TelegramBot\Api\Types\SuccessfulPayment setTelegramPaymentChargeId(string $telegramPaymentChargeId)
 * @method string getTelegramPaymentChargeId()
 * @method \TelegramBot\Api\Types\SuccessfulPayment setProviderPaymentChargeId(string $providerPaymentChargeId)
 * @method string getProviderPaymentChargeId()
*/
class SuccessfulPayment extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'currency',
		'total_amount',
		'invoice_payload',
		'telegram_payment_charge_id',
		'provider_payment_charge_id'
	];
	static protected $map = [
		'currency' => 'string',
		'total_amount' => 'integer',
		'invoice_payload' => 'string',
		'shipping_option_id' => 'string',
		'order_info' => \TelegramBot\Api\Types\OrderInfo::class,
		'telegram_payment_charge_id' => 'string',
		'provider_payment_charge_id' => 'string',
	];
	static protected $defaultData = [
	];
}
