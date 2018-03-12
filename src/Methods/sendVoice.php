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
 * @method sendVoice setChatId(integer | string $chatId)
 * @method sendVoice setVoice(InputFile | string $voice)
 * @method sendVoice setCaption(string $caption)
 * @method sendVoice setParseMode(string $parseMode)
 * @method sendVoice setDuration(integer $duration)
 * @method sendVoice setDisableNotification(boolean $disableNotification)
 * @method sendVoice setReplyToMessageId(integer $replyToMessageId)
 * @method sendVoice setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendVoice extends BaseMethod
{
    protected $map = [
        'chat_id',
        'voice',
        'caption',
        'parse_mode',
        'duration',
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