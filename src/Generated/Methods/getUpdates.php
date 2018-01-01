<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\getUpdates setOffset(integer $offset)
 * @method integer getOffset()
 * @method \TelegramBot\Api\Methods\getUpdates setLimit(integer $limit)
 * @method integer getLimit()
 * @method \TelegramBot\Api\Methods\getUpdates setTimeout(integer $timeout)
 * @method integer getTimeout()
 * @method \TelegramBot\Api\Methods\getUpdates setAllowedUpdates(string[] $allowedUpdates)
 * @method string[] getAllowedUpdates()
*/
class getUpdates extends BaseMethod
{
	static protected $requiredParams = [
		
	];
	static protected $map = [
		'offset' => 'integer',
		'limit' => 'integer',
		'timeout' => 'integer',
		'allowed_updates' => \TelegramBot\Api\Iterators\ArrayOfString::class,
	];
	static protected $defaultData = [
	];
}
