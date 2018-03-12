<?php

namespace TelegramBot\Api\Entities;

use TelegramBot\Api\Extension\InputFile;

/**
 * Class InputMediaVideo
 * @package TelegramBot\Api\Entities
 */
class InputMediaVideo extends InputMedia
{
    protected $type;
    protected $media;
    protected $caption;
    protected $parse_mode;
    protected $width;
    protected $height;
    protected $duration;
    protected $supports_streaming;

    /**
     * @param mixed $type
     * @return InputMediaVideo
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string|InputFile $media
     * @return InputMediaVideo
     */
    public function setMedia($media)
    {
        $this->media = $media;
        return $this;
    }

    /**
     * @param mixed $caption
     * @return InputMediaVideo
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param mixed $parse_mode
     * @return InputMediaVideo
     */
    public function setParseMode($parse_mode)
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param mixed $width
     * @return InputMediaVideo
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param mixed $height
     * @return InputMediaVideo
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @param mixed $duration
     * @return InputMediaVideo
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @param mixed $supports_streaming
     * @return InputMediaVideo
     */
    public function setSupportsStreaming($supports_streaming)
    {
        $this->supports_streaming = $supports_streaming;
        return $this;
    }
}