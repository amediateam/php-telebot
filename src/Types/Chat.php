<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class Chat extends Types\Chat
{
    public function isPrivate()
    {
        return $this->getType() == self::TYPE_PRIVATE;
    }

    public function isGroup()
    {
        return $this->getType() == self::TYPE_GROUP || $this->getType() == self::TYPE_SUPER_GROUP;
    }

    public function isChannel()
    {
        return $this->getType() == self::TYPE_CHANNEL;
    }

    public function getChatMember($user_id)
    {
        return $this->botApi->getChatMember($this->getId(), $user_id);
    }
}
