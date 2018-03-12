<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\Types\Update;

/**
 * @method getUpdates setOffset(integer $offset)
 * @method getUpdates setLimit(integer $limit)
 * @method getUpdates setTimeout(integer $timeout)
 * @method getUpdates setAllowedUpdates(string [] $allowedUpdates)
 */
class getUpdates extends BaseMethod
{
    protected $map = [
        'offset',
        'limit',
        'timeout',
        'allowed_updates',
    ];

    public function toResult(array $response)
    {
        $arr = [];
        foreach ($response as $res) {
            $arr[] = new Update($res, $this->botApi);
        }
        return $arr;
    }
}
