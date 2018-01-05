<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class User extends Types\User
{
    public function getUserProfilePhotos($offset = null, $limit = null)
    {
        return $this->botApi->getUserProfilePhotos($this->getId(), $offset, $limit);
    }
}
