<?php

namespace TelegramBot\Api;
class CaseConverter
{
    public static function toCamelCase($str)
    {
        return str_replace(" ", "", ucwords(str_replace("_", " ", $str)));
    }

    public static function toUnderscoreCase($str)
    {
        return strtolower(preg_replace('/(?<=\\w)(?=[A-Z])/', "_$1", $str));
    }
}