<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\answerCallbackQuery setCallbackQueryId(string $callbackQueryId)
 * @method string getCallbackQueryId()
 * @method \TelegramBot\Api\Methods\answerCallbackQuery setText(string $text)
 * @method string getText()
 * @method \TelegramBot\Api\Methods\answerCallbackQuery setShowAlert(boolean $showAlert)
 * @method boolean getShowAlert()
 * @method \TelegramBot\Api\Methods\answerCallbackQuery setUrl(boolean $url)
 * @method boolean getUrl()
 * @method \TelegramBot\Api\Methods\answerCallbackQuery setCacheTime(integer $cacheTime)
 * @method integer getCacheTime()
*/
class answerCallbackQuery extends BaseMethod
{
	protected $method = 'answerCallbackQuery';
	static protected $requiredParams = [
		'callback_query_id'
	];
	static protected $map = [
		'callback_query_id' => 'string',
		'text' => 'string',
		'show_alert' => 'boolean',
		'url' => 'boolean',
		'cache_time' => 'integer',
	];
	static protected $defaultData = [
	];
}
