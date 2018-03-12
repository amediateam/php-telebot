<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Extension\InputFile;
use TelegramBot\Api\Types\Message;

/**
 * @method sendVideo setChatId(integer | string $chatId)
 * @method sendVideo setVideo(InputFile | string $video)
 * @method sendVideo setDuration(integer $duration)
 * @method sendVideo setWidth(integer $width)
 * @method sendVideo setHeight(integer $height)
 * @method sendVideo setCaption(string $caption)
 * @method sendVideo setParseMode(string $parseMode)
 * @method sendVideo setSupportsStreaming(boolean $supportsStreaming)
 * @method sendVideo setDisableNotification(boolean $disableNotification)
 * @method sendVideo setReplyToMessageId(integer $replyToMessageId)
 * @method sendVideo setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendVideo extends BaseMethod
{
    protected $map = [
        'chat_id',
        'video',
        'duration',
        'width',
        'height',
        'caption',
        'parse_mode',
        'supports_streaming',
        'disable_notification',
        'reply_to_message_id',
        'reply_markup',
    ];

    /**
     * @param BotApi|null $botApi
     * @return Message
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }


    /**
     * @param array $response
     * @return Message
     */
    public function toResult(array $response)
    {
        return new Message($response, $this->botApi);
    }
}
