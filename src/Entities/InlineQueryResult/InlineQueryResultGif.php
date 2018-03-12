<?php
/**
 * Created by PhpStorm.
 * User: Amirhossein Matini
 * Date: 3/12/2018
 * Time: 10:29 PM
 */

namespace TelegramBot\Api\Entities\InlineQueryResult;


use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultGif extends InlineQueryResult
{
    /** @var string */
    protected $type = 'gif';
    /** @var string */
    protected $id;
    /** @var string */
    protected $gif_url;
    /** @var int */
    protected $gif_width;
    /** @var int */
    protected $gif_height;
    /** @var int */
    protected $gif_duration;
    /** @var string */
    protected $thumb_url;
    /** @var string */
    protected $title;
    /** @var string */
    protected $caption;
    /** @var string */
    protected $parse_mode;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var InputMessageContent */
    protected $input_message_content;

    /**
     * @param string $id
     * @return InlineQueryResultGif
     */
    public function setId(string $id): InlineQueryResultGif
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $gif_url
     * @return InlineQueryResultGif
     */
    public function setGifUrl(string $gif_url): InlineQueryResultGif
    {
        $this->gif_url = $gif_url;
        return $this;
    }

    /**
     * @param int $gif_width
     * @return InlineQueryResultGif
     */
    public function setGifWidth(int $gif_width): InlineQueryResultGif
    {
        $this->gif_width = $gif_width;
        return $this;
    }

    /**
     * @param int $gif_height
     * @return InlineQueryResultGif
     */
    public function setGifHeight(int $gif_height): InlineQueryResultGif
    {
        $this->gif_height = $gif_height;
        return $this;
    }

    /**
     * @param int $gif_duration
     * @return InlineQueryResultGif
     */
    public function setGifDuration(int $gif_duration): InlineQueryResultGif
    {
        $this->gif_duration = $gif_duration;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultGif
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultGif
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultGif
     */
    public function setTitle(string $title): InlineQueryResultGif
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $caption
     * @return InlineQueryResultGif
     */
    public function setCaption(string $caption): InlineQueryResultGif
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InlineQueryResultGif
     */
    public function setParseMode(string $parse_mode): InlineQueryResultGif
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultGif
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultGif
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultGif
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultGif
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }
}