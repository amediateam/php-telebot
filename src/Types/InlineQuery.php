<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class InlineQuery extends Types\InlineQuery
{
    public function answer(array $results, $cacheTime = null, $isPersonal = false, $nextOffset = null, $switchPmText = null, $switchPmParameter = null)
    {
        $this->getBot()->answerInlineQuery($this->getId(), $results, $cacheTime, $isPersonal, $nextOffset, $switchPmText, $switchPmParameter);
    }
}
