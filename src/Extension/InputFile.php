<?php

namespace TelegramBot\Api\Extension;

use TelegramBot\Api\InvalidArgumentException;
use function is_readable;

class InputFile
{
    private $filename;

    /**
     * InputFile constructor.
     * @param $filename
     * @param $mime_type
     * @param $post_name
     * @throws InvalidArgumentException
     */
    public function __construct($filename, $mime_type = null, $post_name = null)
    {
        if (!is_file($filename)) {
            throw new InvalidArgumentException('File "' . $filename . '" does not exists.');
        } else if (!is_readable($filename)) {
            throw new InvalidArgumentException('File "' . $filename . '" is not readable.');
        }
        $this->filename = $filename;
    }

    public function getInputFile()
    {
        return fopen($this->filename, 'r');
    }
}