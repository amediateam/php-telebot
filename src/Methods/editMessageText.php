<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\ReplyMarkup\ForceReply;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardMarkup;
use TelegramBot\Api\Entities\ReplyMarkup\ReplyKeyboardRemove;
use TelegramBot\Api\Types\Message;

/**
 * @method editMessageText setChatId(integer | string $chatId)
 * @method editMessageText setMessageId(integer $messageId)
 * @method editMessageText setInlineMessageId(string $inlineMessageId)
 * @method editMessageText setText(string $text)
 * @method editMessageText setParseMode(string $parseMode)
 * @method editMessageText setDisableWebPagePreview(boolean $disableWebPagePreview)
 * @method editMessageText setReplyMarkup(InlineKeyboardMarkup | ReplyKeyboardMarkup | ReplyKeyboardRemove | ForceReply $replyMarkup)
 */
class editMessageText extends BaseMethod
{
    protected $map = [
        'chat_id',
        'message_id',
        'inline_message_id',
        'text',
        'parse_mode',
        'disable_web_page_preview',
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
     * @return bool|Message
     */
    public function toResult($response)
    {
        return is_bool($response) ? $response : new Message($response, $this->botApi);
    }
}
