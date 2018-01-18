<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\WebhookInfo setUrl(string $url)
 * @method string getUrl()
 * @method \TelegramBot\Api\Types\WebhookInfo setHasCustomCertificate(boolean $hasCustomCertificate)
 * @method boolean getHasCustomCertificate()
 * @method \TelegramBot\Api\Types\WebhookInfo setPendingUpdateCount(integer $pendingUpdateCount)
 * @method integer getPendingUpdateCount()
 * @method \TelegramBot\Api\Types\WebhookInfo setLastErrorDate(integer $lastErrorDate)
 * @method integer getLastErrorDate()
 * @method \TelegramBot\Api\Types\WebhookInfo setLastErrorMessage(string $lastErrorMessage)
 * @method string getLastErrorMessage()
 * @method \TelegramBot\Api\Types\WebhookInfo setMaxConnections(integer $maxConnections)
 * @method integer getMaxConnections()
 * @method \TelegramBot\Api\Types\WebhookInfo setAllowedUpdates(string[] $allowedUpdates)
 * @method string[] getAllowedUpdates()
*/
class WebhookInfo extends BaseType implements TypeInterface
{
public static $name = 'WebhookInfo';
	static protected $requiredParams = [
		'url'
	];
	static protected $map = [
		'url' => 'string',
		'has_custom_certificate' => 'boolean',
		'pending_update_count' => 'integer',
		'last_error_date' => 'integer',
		'last_error_message' => 'string',
		'max_connections' => 'integer',
		'allowed_updates' => \TelegramBot\Api\Iterators\ArrayOfString::class,
	];
	static protected $defaultData = [
	];
}
