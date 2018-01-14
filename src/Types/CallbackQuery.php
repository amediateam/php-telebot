<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class CallbackQuery extends Types\CallbackQuery
{
    public function answer()
    {
        return $this->getBot()->answerCallbackQuery($this->getId());
    }

    public function answerText($text, $showAlert = false, $cacheTime = null)
    {
        return $this->getBot()->answerCallbackQuery($this->getId(), $text, $showAlert, null, $cacheTime);
    }

    public function answerUrl($url, $cacheTime = null)
    {
        return $this->getBot()->answerCallbackQuery($this->getId(), null, false, $url, $cacheTime);
    }
}
