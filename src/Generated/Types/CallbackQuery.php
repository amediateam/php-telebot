<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\CallbackQuery setId(integer $id)
 * @method integer getId()
 * @method \TelegramBot\Api\Types\CallbackQuery setFrom(\TelegramBot\Api\Types\User $from)
 * @method \TelegramBot\Api\Types\User getFrom()
 * @method \TelegramBot\Api\Types\CallbackQuery setMessage(\TelegramBot\Api\Types\Message $message)
 * @method \TelegramBot\Api\Types\Message getMessage()
 * @method \TelegramBot\Api\Types\CallbackQuery setInlineMessageId(integer $inlineMessageId)
 * @method integer getInlineMessageId()
 * @method \TelegramBot\Api\Types\CallbackQuery setChatInstance(string $chatInstance)
 * @method string getChatInstance()
 * @method \TelegramBot\Api\Types\CallbackQuery setData(string $data)
 * @method string getData()
 * @method \TelegramBot\Api\Types\CallbackQuery setGameShortName(string $gameShortName)
 * @method string getGameShortName()
*/
class CallbackQuery extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'id',
		'from'
	];
	static protected $map = [
		'id' => 'integer',
		'from' => \TelegramBot\Api\Types\User::class,
		'message' => \TelegramBot\Api\Types\Message::class,
		'inline_message_id' => 'integer',
		'chat_instance' => 'string',
		'data' => 'string',
		'game_short_name' => 'string',
	];
	static protected $defaultData = [
	];
}
