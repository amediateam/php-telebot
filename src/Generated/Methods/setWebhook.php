<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\setWebhook setUrl(string $url)
 * @method string getUrl()
 * @method \TelegramBot\Api\Methods\setWebhook setCertificate(\TelegramBot\Api\Extension\InputFile $certificate)
 * @method \TelegramBot\Api\Extension\InputFile getCertificate()
 * @method \TelegramBot\Api\Methods\setWebhook setMaxConnections(integer $maxConnections)
 * @method integer getMaxConnections()
 * @method \TelegramBot\Api\Methods\setWebhook setAllowedUpdates(string[] $allowedUpdates)
 * @method string[] getAllowedUpdates()
*/
class setWebhook extends BaseMethod
{
	protected $method = 'setWebhook';
	static protected $requiredParams = [
		'url'
	];
	static protected $map = [
		'url' => 'string',
		'certificate' => \TelegramBot\Api\Extension\InputFile::class,
		'max_connections' => 'integer',
		'allowed_updates' => \TelegramBot\Api\Iterators\ArrayOfString::class,
	];
	static protected $defaultData = [
	];
}
