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
 * @method sendAudio setChatId(integer | string $chatId)
 * @method sendAudio setAudio(InputFile | string $audio)
 * @method sendAudio setDuration(integer $duration)
 * @method sendAudio setPerformer(string $performer)
 * @method sendAudio setTitle(string $title)
 * @method sendAudio setCaption(string $caption)
 * @method sendAudio setParseMode(string $parseMode)
 * @method sendAudio setDisableNotification(boolean $disableNotification)
 * @method sendAudio setReplyToMessageId(integer $replyToMessageId)
 * @method sendAudio setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendAudio extends BaseMethod
{
    protected $map = [
        'chat_id',
        'audio',
        'duration',
        'performer',
        'title',
        'caption',
        'parse_mode',
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
