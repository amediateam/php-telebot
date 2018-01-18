<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Update setUpdateId(integer $updateId)
 * @method integer getUpdateId()
 * @method \TelegramBot\Api\Types\Update setMessage(\TelegramBot\Api\Types\Message $message)
 * @method \TelegramBot\Api\Types\Message getMessage()
 * @method \TelegramBot\Api\Types\Update setEditedMessage(\TelegramBot\Api\Types\Message $editedMessage)
 * @method \TelegramBot\Api\Types\Message getEditedMessage()
 * @method \TelegramBot\Api\Types\Update setChannelPost(\TelegramBot\Api\Types\Message $channelPost)
 * @method \TelegramBot\Api\Types\Message getChannelPost()
 * @method \TelegramBot\Api\Types\Update setEditedChannelPost(\TelegramBot\Api\Types\Message $editedChannelPost)
 * @method \TelegramBot\Api\Types\Message getEditedChannelPost()
 * @method \TelegramBot\Api\Types\Update setInlineQuery(\TelegramBot\Api\Types\InlineQuery $inlineQuery)
 * @method \TelegramBot\Api\Types\InlineQuery getInlineQuery()
 * @method \TelegramBot\Api\Types\Update setChosenInlineResult(\TelegramBot\Api\Types\ChosenInlineResult $chosenInlineResult)
 * @method \TelegramBot\Api\Types\ChosenInlineResult getChosenInlineResult()
 * @method \TelegramBot\Api\Types\Update setCallbackQuery(\TelegramBot\Api\Types\CallbackQuery $callbackQuery)
 * @method \TelegramBot\Api\Types\CallbackQuery getCallbackQuery()
 * @method \TelegramBot\Api\Types\Update setShippingQuery(\TelegramBot\Api\Types\ShippingQuery $shippingQuery)
 * @method \TelegramBot\Api\Types\ShippingQuery getShippingQuery()
 * @method \TelegramBot\Api\Types\Update setPreCheckoutQuery(\TelegramBot\Api\Types\PreCheckoutQuery $preCheckoutQuery)
 * @method \TelegramBot\Api\Types\PreCheckoutQuery getPreCheckoutQuery()
*/
class Update extends BaseType implements TypeInterface
{
public static $name = 'Update';
	static protected $requiredParams = [
		'update_id'
	];
	static protected $map = [
		'update_id' => 'integer',
		'message' => \TelegramBot\Api\Types\Message::class,
		'edited_message' => \TelegramBot\Api\Types\Message::class,
		'channel_post' => \TelegramBot\Api\Types\Message::class,
		'edited_channel_post' => \TelegramBot\Api\Types\Message::class,
		'inline_query' => \TelegramBot\Api\Types\InlineQuery::class,
		'chosen_inline_result' => \TelegramBot\Api\Types\ChosenInlineResult::class,
		'callback_query' => \TelegramBot\Api\Types\CallbackQuery::class,
		'shipping_query' => \TelegramBot\Api\Types\ShippingQuery::class,
		'pre_checkout_query' => \TelegramBot\Api\Types\PreCheckoutQuery::class,
	];
	static protected $defaultData = [
	];
}
