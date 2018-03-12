<?php

namespace TelegramBot\Api\Entities;

use TelegramBot\Api\Extension\InputFile;

/**
 * Class InputMediaPhoto
 * @package TelegramBot\Api\Entities
 */
class InputMediaPhoto extends InputMedia
{
    protected $type;
    protected $media;
    protected $caption;
    protected $parse_mode;

    /**
     * @param mixed $type
     * @return InputMediaPhoto
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string|InputFile $media
     * @return InputMediaPhoto
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * @param mixed $caption
     * @return InputMediaPhoto
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param mixed $parse_mode
     * @return InputMediaPhoto
     */
    public function setParseMode($parse_mode)
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }
}