<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\getUserProfilePhotos setUserId(integer $userId)
 * @method integer getUserId()
 * @method \TelegramBot\Api\Methods\getUserProfilePhotos setOffset(integer $offset)
 * @method integer getOffset()
 * @method \TelegramBot\Api\Methods\getUserProfilePhotos setLimit(integer $limit)
 * @method integer getLimit()
*/
class getUserProfilePhotos extends BaseMethod
{
	protected $method = 'getUserProfilePhotos';
	static protected $requiredParams = [
		'user_id'
	];
	static protected $map = [
		'user_id' => 'integer',
		'offset' => 'integer',
		'limit' => 'integer',
	];
	static protected $defaultData = [
	];
}
