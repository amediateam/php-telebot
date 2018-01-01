<?php

namespace TelegramBot\Api;

interface TypeInterface
{
    public static function fromResponse(BotApi $bot, $data);
}
