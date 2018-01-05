<?php
namespace TelegramBot\Api\Types;
use TelegramBot\Api\Generated\Types;
class CallbackQuery extends Types\CallbackQuery
{
    public function answer($text, $showAlert = false, $url = null, $cacheTime = null){
        return $this->botApi->answerCallbackQuery($this->getId(), $text, $showAlert, $url, $cacheTime);
    }
}
