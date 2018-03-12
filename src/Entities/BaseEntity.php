<?php

namespace TelegramBot\Api\Entities;
abstract class BaseEntity
{
    public static function create()
    {
        return new static();
    }

    public function toArray()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $key => &$var) {
            if ($var instanceof BaseEntity) {
                $var = $var->toArray();
            } else if (!isset($var)) {
                unset($vars[$key]);
            }
        }
        return $vars;
    }
}