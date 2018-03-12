<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Entities\InputMedia;
use TelegramBot\Api\Types\Message;

/**
 * @method sendMediaGroup setChatId(integer | string $chatId)
 * @method sendMediaGroup setDuration(integer $duration)
 * @method sendMediaGroup setLength(integer $length)
 * @method sendMediaGroup setDisableNotification(boolean $disableNotification)
 * @method sendMediaGroup setReplyToMessageId(integer $replyToMessageId)
 */
class sendMediaGroup extends BaseMethod
{
    protected $map = [
        'chat_id',
        'media',
        'duration',
        'length',
        'disable_notification',
        'reply_to_message_id',
    ];

    /**
     * @param BotApi|null $botApi
     * @return Message[]
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param InputMedia[] $media
     */
    public function setMedia(array $media)
    {
        $this->data['media'] = [];
        foreach ($media as $inputMedia) {
            if ($inputMedia instanceof InputMedia) {
                $this->data['media'][] = $inputMedia->toArray();
            } else {
                $this->data['media'][] = $inputMedia;
            }
        }
    }

    /**
     * @param array $response
     * @return Message[]
     */
    public function toResult(array $response)
    {
        $arr = [];
        foreach ($response as $res) {
            $arr[] = new Message($res, $this->botApi);
        }
        return $arr;
    }
}
