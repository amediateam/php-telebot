<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\answerPreCheckoutQuery setPreCheckoutQueryId(string $preCheckoutQueryId)
 * @method string getPreCheckoutQueryId()
 * @method \TelegramBot\Api\Methods\answerPreCheckoutQuery setOk(boolean $ok)
 * @method boolean getOk()
 * @method \TelegramBot\Api\Methods\answerPreCheckoutQuery setErrorMessage(string $errorMessage)
 * @method string getErrorMessage()
*/
class answerPreCheckoutQuery extends BaseMethod
{
	static protected $requiredParams = [
		'pre_checkout_query_id',
		'Boolean'
	];
	static protected $map = [
		'pre_checkout_query_id' => 'string',
		'ok' => 'boolean',
		'error_message' => 'string',
	];
	static protected $defaultData = [
	];
}
