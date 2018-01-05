<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\sendInvoice setChatId(integer|string $chatId)
 * @method integer|string getChatId()
 * @method \TelegramBot\Api\Methods\sendInvoice setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Methods\sendInvoice setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Methods\sendInvoice setPayload(string $payload)
 * @method string getPayload()
 * @method \TelegramBot\Api\Methods\sendInvoice setProviderToken(string $providerToken)
 * @method string getProviderToken()
 * @method \TelegramBot\Api\Methods\sendInvoice setStartParameter(string $startParameter)
 * @method string getStartParameter()
 * @method \TelegramBot\Api\Methods\sendInvoice setCurrency(string $currency)
 * @method string getCurrency()
 * @method \TelegramBot\Api\Methods\sendInvoice setPrices(\TelegramBot\Api\Types\LabeledPrice[] $prices)
 * @method \TelegramBot\Api\Types\LabeledPrice[] getPrices()
 * @method \TelegramBot\Api\Methods\sendInvoice setProviderData(string $providerData)
 * @method string getProviderData()
 * @method \TelegramBot\Api\Methods\sendInvoice setPhotoUrl(string $photoUrl)
 * @method string getPhotoUrl()
 * @method \TelegramBot\Api\Methods\sendInvoice setPhotoSize(integer $photoSize)
 * @method integer getPhotoSize()
 * @method \TelegramBot\Api\Methods\sendInvoice setPhotoWidth(integer $photoWidth)
 * @method integer getPhotoWidth()
 * @method \TelegramBot\Api\Methods\sendInvoice setPhotoHeight(integer $photoHeight)
 * @method integer getPhotoHeight()
 * @method \TelegramBot\Api\Methods\sendInvoice setNeedName(boolean $needName)
 * @method boolean getNeedName()
 * @method \TelegramBot\Api\Methods\sendInvoice setNeedPhoneNumber(boolean $needPhoneNumber)
 * @method boolean getNeedPhoneNumber()
 * @method \TelegramBot\Api\Methods\sendInvoice setNeedEmail(boolean $needEmail)
 * @method boolean getNeedEmail()
 * @method \TelegramBot\Api\Methods\sendInvoice setNeedShippingAddress(boolean $needShippingAddress)
 * @method boolean getNeedShippingAddress()
 * @method \TelegramBot\Api\Methods\sendInvoice setIsFlexible(boolean $isFlexible)
 * @method boolean getIsFlexible()
 * @method \TelegramBot\Api\Methods\sendInvoice setDisableNotification(boolean $disableNotification)
 * @method boolean getDisableNotification()
 * @method \TelegramBot\Api\Methods\sendInvoice setReplyToMessageId(integer $replyToMessageId)
 * @method integer getReplyToMessageId()
 * @method \TelegramBot\Api\Methods\sendInvoice setReplyMarkup(\TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup)
 * @method \TelegramBot\Api\Types\InlineKeyboardMarkup getReplyMarkup()
*/
class sendInvoice extends BaseMethod
{
	protected $method = 'sendInvoice';
	static protected $requiredParams = [
		'chat_id',
		'title',
		'description',
		'payload',
		'provider_token',
		'start_parameter',
		'currency',
		'prices'
	];
	static protected $map = [
		'chat_id' => [
			'integer',
			'string',
		],
		'title' => 'string',
		'description' => 'string',
		'payload' => 'string',
		'provider_token' => 'string',
		'start_parameter' => 'string',
		'currency' => 'string',
		'prices' => \TelegramBot\Api\Iterators\ArrayOfLabeledPrice::class,
		'provider_data' => 'string',
		'photo_url' => 'string',
		'photo_size' => 'integer',
		'photo_width' => 'integer',
		'photo_height' => 'integer',
		'need_name' => 'boolean',
		'need_phone_number' => 'boolean',
		'need_email' => 'boolean',
		'need_shipping_address' => 'boolean',
		'is_flexible' => 'boolean',
		'disable_notification' => 'boolean',
		'reply_to_message_id' => 'integer',
		'reply_markup' => \TelegramBot\Api\Types\InlineKeyboardMarkup::class,
	];
	static protected $defaultData = [
	];
}
