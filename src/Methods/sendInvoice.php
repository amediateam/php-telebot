<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Entities\LabeledPrice;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Types\Message;

/**
 * @method sendInvoice setChatId(integer | string $chatId)
 * @method sendInvoice setTitle(string $title)
 * @method sendInvoice setDescription(string $description)
 * @method sendInvoice setPayload(string $payload)
 * @method sendInvoice setProviderToken(string $providerToken)
 * @method sendInvoice setStartParameter(string $startParameter)
 * @method sendInvoice setCurrency(string $currency)
 * @method sendInvoice setPrices(LabeledPrice [] $prices)
 * @method sendInvoice setProviderData(string $providerData)
 * @method sendInvoice setPhotoUrl(string $photoUrl)
 * @method sendInvoice setPhotoSize(integer $photoSize)
 * @method sendInvoice setPhotoWidth(integer $photoWidth)
 * @method sendInvoice setPhotoHeight(integer $photoHeight)
 * @method sendInvoice setNeedName(boolean $needName)
 * @method sendInvoice setNeedPhoneNumber(boolean $needPhoneNumber)
 * @method sendInvoice setNeedEmail(boolean $needEmail)
 * @method sendInvoice setNeedShippingAddress(boolean $needShippingAddress)
 * @method sendInvoice setIsFlexible(boolean $isFlexible)
 * @method boolean isFlexible()
 * @method sendInvoice setDisableNotification(boolean $disableNotification)
 * @method sendInvoice setReplyToMessageId(integer $replyToMessageId)
 * @method sendInvoice setReplyMarkup(InlineKeyboardMarkup $replyMarkup)
 */
class sendInvoice extends BaseMethod
{
    protected $map = [
        'chat_id',
        'title',
        'description',
        'payload',
        'provider_token',
        'start_parameter',
        'currency',
        'prices',
        'provider_data',
        'photo_url',
        'photo_size',
        'photo_width',
        'photo_height',
        'need_name',
        'need_phone_number',
        'need_email',
        'need_shipping_address',
        'is_flexible',
        'disable_notification',
        'reply_to_message_id',
        'reply_markup',
    ];

    public function toResult(array $response)
    {
        return new Message($response, $this->botApi);
    }
}
