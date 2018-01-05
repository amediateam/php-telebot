<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\getFile setFileId(string $fileId)
 * @method string getFileId()
*/
class getFile extends BaseMethod
{
	protected $method = 'getFile';
	static protected $requiredParams = [
		'file_id'
	];
	static protected $map = [
		'file_id' => 'string',
	];
	static protected $defaultData = [
	];
}
