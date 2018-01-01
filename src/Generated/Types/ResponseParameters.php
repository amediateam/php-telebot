<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ResponseParameters setMigrateToChatId(integer $migrateToChatId)
 * @method integer getMigrateToChatId()
 * @method \TelegramBot\Api\Types\ResponseParameters setRetryAfter(integer $retryAfter)
 * @method integer getRetryAfter()
*/
class ResponseParameters extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		
	];
	static protected $map = [
		'migrate_to_chat_id' => 'integer',
		'retry_after' => 'integer',
	];
	static protected $defaultData = [
	];
}
