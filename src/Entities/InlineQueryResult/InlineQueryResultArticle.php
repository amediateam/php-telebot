<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\InputMessageContent\InputMessageContent;
use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultArticle extends InlineQueryResult
{
    /** @var string */
    protected $type = 'article';
    /** @var string */
    protected $id;
    /** @var string */
    protected $title;
    /** @var InputMessageContent */
    protected $input_message_content;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;
    /** @var string */
    protected $url;
    /** @var bool */
    protected $hide_url;
    /** @var string */
    protected $description;
    /** @var string */
    protected $thumb_url;
    /** @var string */
    protected $thumb_width;
    /** @var string */
    protected $thumb_height;

    /**
     * @param string $id
     * @return InlineQueryResultArticle
     */
    public function setId(string $id): InlineQueryResultArticle
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $title
     * @return InlineQueryResultArticle
     */
    public function setTitle(string $title): InlineQueryResultArticle
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param InputMessageContent $input_message_content
     * @return InlineQueryResultArticle
     */
    public function setInputMessageContent(InputMessageContent $input_message_content): InlineQueryResultArticle
    {
        $this->input_message_content = $input_message_content;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultArticle
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultArticle
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }

    /**
     * @param string $url
     * @return InlineQueryResultArticle
     */
    public function setUrl(string $url): InlineQueryResultArticle
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param bool $hide_url
     * @return InlineQueryResultArticle
     */
    public function setHideUrl(bool $hide_url): InlineQueryResultArticle
    {
        $this->hide_url = $hide_url;
        return $this;
    }

    /**
     * @param string $description
     * @return InlineQueryResultArticle
     */
    public function setDescription(string $description): InlineQueryResultArticle
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $thumb_url
     * @return InlineQueryResultArticle
     */
    public function setThumbUrl(string $thumb_url): InlineQueryResultArticle
    {
        $this->thumb_url = $thumb_url;
        return $this;
    }

    /**
     * @param string $thumb_width
     * @return InlineQueryResultArticle
     */
    public function setThumbWidth(string $thumb_width): InlineQueryResultArticle
    {
        $this->thumb_width = $thumb_width;
        return $this;
    }

    /**
     * @param string $thumb_height
     * @return InlineQueryResultArticle
     */
    public function setThumbHeight(string $thumb_height): InlineQueryResultArticle
    {
        $this->thumb_height = $thumb_height;
        return $this;
    }
}