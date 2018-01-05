<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\editMessageText setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\editMessageText setMessageId(integer $messageId)
 * @method integer getMessageId()
 * @method \TelegramBot\Api\Methods\editMessageText setInlineMessageId(string $inlineMessageId)
 * @method string getInlineMessageId()
 * @method \TelegramBot\Api\Methods\editMessageText setText(string $text)
 * @method string getText()
 * @method \TelegramBot\Api\Methods\editMessageText setParseMode(string $parseMode)
 * @method string getParseMode()
 * @method \TelegramBot\Api\Methods\editMessageText setDisableWebPagePreview(boolean $disableWebPagePreview)
 * @method boolean getDisableWebPagePreview()
 * @method \TelegramBot\Api\Methods\editMessageText setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply getReplyMarkup()
*/
class editMessageText extends BaseMethod
{
	protected $method = 'editMessageText';
	static protected $requiredParams = [
		'chat_id',
		'message_id',
		'text'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'message_id' => 'integer',
		'inline_message_id' => 'string',
		'text' => 'string',
		'parse_mode' => 'string',
		'disable_web_page_preview' => 'boolean',
		'reply_markup' => [
			\TelegramBot\Api\Types\InlineKeyboardMarkup::class,
			\TelegramBot\Api\Types\ReplyKeyboardMarkup::class,
			\TelegramBot\Api\Types\ReplyKeyboardRemove::class,
			\TelegramBot\Api\Types\ForceReply::class,
		],
	];
	static protected $defaultData = [
	];
}
