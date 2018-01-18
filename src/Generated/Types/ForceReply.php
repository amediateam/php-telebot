<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ForceReply setForceReply(boolean $forceReply)
 * @method boolean getForceReply()
 * @method \TelegramBot\Api\Types\ForceReply setSelective(boolean $selective)
 * @method boolean getSelective()
*/
class ForceReply extends BaseType implements TypeInterface
{
public static $name = 'ForceReply';
	static protected $requiredParams = [
		'force_reply'
	];
	static protected $map = [
		'force_reply' => 'boolean',
		'selective' => 'boolean',
	];
	static protected $defaultData = [
	];
}
