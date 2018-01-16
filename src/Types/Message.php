<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class Message extends Types\Message
{
    private $effectiveStatusUpdate = null;

    public function getEffectiveStatusUpdate()
    {
        if ($this->effectiveStatusUpdate !== null) {
            return $this->effectiveStatusUpdate;
        }
        $arr = [
            $this->getNewChatPhoto(),
            $this->getNewChatTitle(),
            $this->getNewChatMembers(),
            $this->getLeftChatMember(),
            $this->getSupergroupChatCreated(),
            $this->getGroupChatCreated(),
            $this->getChannelChatCreated(),
        ];
        foreach ($arr as $k) {
            if (false !== $k) {
                $this->effectiveStatusUpdate = $k;
                return $k;
            }
        }
        return $this->effectiveStatusUpdate = false;
    }

    public function isTextMessage()
    {
        return false !== $this->getText();
    }
}
