<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ChatPhoto setSmallFileId(string $smallFileId)
 * @method string getSmallFileId()
 * @method \TelegramBot\Api\Types\ChatPhoto setBigFileId(string $bigFileId)
 * @method string getBigFileId()
*/
class ChatPhoto extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'small_file_id',
		'big_file_id'
	];
	static protected $map = [
		'small_file_id' => 'string',
		'big_file_id' => 'string',
	];
	static protected $defaultData = [
	];
}
