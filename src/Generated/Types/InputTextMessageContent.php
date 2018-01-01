<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\InputTextMessageContent setMessageText(string $messageText)
 * @method string getMessageText()
 * @method \TelegramBot\Api\Types\InputTextMessageContent setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Types\InputTextMessageContent setDisableWebPagePreview(boolean $disableWebPagePreview)
 * @method boolean getDisableWebPagePreview()
*/
class InputTextMessageContent extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'message_text'
	];
	static protected $map = [
		'message_text' => 'string',
		'parse_mode' => 'string',
		'disable_web_page_preview' => 'boolean',
	];
	static protected $defaultData = [
	];
}
