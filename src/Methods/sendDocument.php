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
 * @method sendDocument setChatId(integer | string $chatId)
 * @method sendDocument setDocument(InputFile | string $document)
 * @method sendDocument setCaption(string $caption)
 * @method sendDocument setParseMode(string $parseMode)
 * @method sendDocument setDisableNotification(boolean $disableNotification)
 * @method sendDocument setReplyToMessageId(integer $replyToMessageId)
 * @method sendDocument setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class sendDocument extends BaseMethod
{
    protected $map = [
        'chat_id',
        'document',
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
