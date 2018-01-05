<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\answerShippingQuery setShippingQueryId(string $shippingQueryId)
 * @method string getShippingQueryId()
 * @method \TelegramBot\Api\Methods\answerShippingQuery setOk(boolean $ok)
 * @method boolean getOk()
 * @method \TelegramBot\Api\Methods\answerShippingQuery setShippingOptions(\TelegramBot\Api\Types\ShippingOption[] $shippingOptions)
 * @method \TelegramBot\Api\Types\ShippingOption[] getShippingOptions()
 * @method \TelegramBot\Api\Methods\answerShippingQuery setErrorMessage(string $errorMessage)
 * @method string getErrorMessage()
*/
class answerShippingQuery extends BaseMethod
{
	static protected $requiredParams = [
		'shipping_query_id',
		'ok'
	];
	static protected $map = [
		'shipping_query_id' => 'string',
		'ok' => 'boolean',
		'shipping_options' => \TelegramBot\Api\Iterators\ArrayOfShippingOption::class,
		'error_message' => 'string',
	];
	static protected $defaultData = [
	];
}
