<?php

namespace TelegramBot\Api\Methods;

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
     * @param array $response
     * @return UserProfilePhotos
     */
    public function toResult(array $response)
    {
        return new UserProfilePhotos($response, $this->botApi);
    }
}
