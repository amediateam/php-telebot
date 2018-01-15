<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class Update extends Types\Update
{
    /** @var Message */
    private $effectiveMessage;
    /** @var Chat */
    private $effectiveChat;
    /** @var boolean */
    private $isEdited = null;
    /** @var boolean */
    private $isChannelPost = null;

    public function getEffectiveChat()
    {
        if ($this->effectiveChat) {
            return $this->effectiveChat;
        }
        if ($this->getEffectiveMessage()) {
            return $this->effectiveChat = $this->getEffectiveMessage()->getChat();
        }
        return $this->effectiveChat = false;
    }

    public function isEdited()
    {
        if ($this->isEdited !== null) {
            return $this->isEdited;
        }
        return $this->isEdited = (false !== (bool)$this->getEditedMessage() || false !== (bool)$this->getEditedChannelPost());
    }

    public function isChannelPost()
    {
        if ($this->isChannelPost !== null) {
            return $this->isChannelPost;
        }
        return $this->isChannelPost = (false !== (bool)$this->getChannelPost() || false !== (bool)$this->getEditedChannelPost());
    }

    public function getEffectiveMessage()
    {
        if ($this->effectiveMessage) {
            return $this->effectiveMessage;
        }
        $arr = [
            $this->getMessage(),
            $this->getEditedMessage(),
            $this->getChannelPost(),
            $this->getEditedChannelPost()
        ];
        foreach ($arr as $k) {
            if (false !== $k) {
                $this->effectiveMessage = $k;
                return $k;
            }
        }
        return $this->effectiveMessage = false;
    }

    public function getUserId($separatePrivateChats = true)
    {
        if ($separatePrivateChats && $this->getEffectiveChat() && !$this->getEffectiveChat()->isPrivate()) {
            return $this->getEffectiveChat()->getId();
        }
        if ($this->getEffectiveMessage()) {
            return $this->getEffectiveMessage()->getFrom()->getId();
        } else if ($this->getInlineQuery()) {
            return $this->getInlineQuery()->getFrom()->getId();
        } else if ($this->getCallbackQuery()) {
            return $this->getCallbackQuery()->getFrom()->getId();
        } else if ($this->getPreCheckoutQuery()) {
            return $this->getPreCheckoutQuery()->getFrom()->getId();
        } else if ($this->getShippingQuery()) {
            return $this->getShippingQuery()->getFrom()->getId();
        } else if ($this->getChosenInlineResult()) {
            return $this->getChosenInlineResult()->getFrom()->getId();
        }
        return false;
    }
}
