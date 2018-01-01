<?php

namespace TelegramBot\Api\Types;

use function array_values;

class TextCommand
{
    private $name;
    private $params;
    private $argsText;

    public function __construct($name, $params, $argsText)
    {
        $this->name = $name;
        $this->params = $params;
        $this->argsText = $argsText;
    }

    public function getParams($count = null)
    {
        if (!is_null($count)) {
            $size = sizeof($this->params);
            if ($size < $count) {
                return array_merge($this->params, array_values(array_fill(0, $count - $size, false)));
            }
        }
        return $this->params;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getArgsText()
    {
        return $this->argsText;
    }

    public static function parse($text)
    {
        preg_match("%^\/([^@\s]+)@?(?:(\S+)|)\s?([\s\S]*)$%i", $text, $matches);
        if (!isset($matches[1]) || empty($matches[1])) {
            return false;
        }
        $command = $matches[1];
        if (empty($matches[3])) {
            $args = [];
        } else {
            $args = explode(" ", $matches[3]);
        }
        return new self($command, $args, $matches[3]);
    }
}