<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\UserProfilePhotos;

/**
 * @method getUserProfilePhotos setUserId(integer $userId)
 * @method getUserProfilePhotos setOffset(integer $offset)
 * @method getUserProfilePhotos setLimit(integer $limit)
 */
class getUserProfilePhotos extends BaseMethod
{
    protected $map = [
        'user_id',
        'offset',
        'limit',
    ];

    /**
     * @param BotApi|null $botApi
     * @return UserProfilePhotos
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }


    /**
     * @param array $response
     * @return UserProfilePhotos
     */
    public function toResult(array $response)
    {
        return new UserProfilePhotos($response, $this->botApi);
    }
}
