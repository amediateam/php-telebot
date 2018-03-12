<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method int getTotalCount()
 * @method PhotoSize[][] getPhotos()
 */
class UserProfilePhotos extends BaseType
{
    protected $total_count;
    protected $photos;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->total_count = $this->getPropertyFromData('total_count', 'int');
        $this->photos = [];
        foreach ($data['photos'] as $photo) {
            $this->photos[] = new PhotoSize($photo, $botApi);
        }
    }
}