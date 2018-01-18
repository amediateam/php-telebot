<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\MessageEntity setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\MessageEntity setOffset(integer $offset)
 * @method integer getOffset()
 * @method \TelegramBot\Api\Types\MessageEntity setLength(integer $length)
 * @method integer getLength()
 * @method \TelegramBot\Api\Types\MessageEntity setUrl(string $url)
 * @method string getUrl()
 * @method \TelegramBot\Api\Types\MessageEntity setUser(\TelegramBot\Api\Types\User $user)
 * @method \TelegramBot\Api\Types\User getUser()
*/
class MessageEntity extends BaseType implements TypeInterface
{
public static $name = 'MessageEntity';
	const TYPE_MENTION = 'mention';
	const TYPE_HASHTAG = 'hashtag';
	const TYPE_BOT_COMMAND = 'bot_command';
	const TYPE_URL = 'url';
	const TYPE_EMAIL = 'email';
	const TYPE_BOLD = 'bold';
	const TYPE_ITALIC = 'italic';
	const TYPE_CODE = 'code';
	const TYPE_PRE = 'pre';
	const TYPE_TEXT_LINK = 'text_link';
	static protected $requiredParams = [
		'type',
		'offset',
		'length'
	];
	static protected $map = [
		'type' => 'string',
		'offset' => 'integer',
		'length' => 'integer',
		'url' => 'string',
		'user' => \TelegramBot\Api\Types\User::class,
	];
	static protected $defaultData = [
	];
}
