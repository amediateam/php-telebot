<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class ChatMember extends Types\ChatMember
{
    public function isParticipant()
    {
        return in_array($this->getStatus(), [self::CREATOR, self::ADMINISTRATOR, self::MEMBER]);
    }

    public function isBot()
    {
        return $this->getUser()->isBot();
    }
}
