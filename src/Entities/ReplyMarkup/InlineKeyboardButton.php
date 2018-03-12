<?php

namespace TelegramBot\Api\Entities\ReplyMarkup;

use TelegramBot\Api\Entities\BaseEntity;

class InlineKeyboardButton extends BaseEntity
{
    protected $text;
    protected $url;
    protected $callback_data;
    protected $switch_inline_query;
    protected $switch_inline_query_current_chat;
    protected $callback_game;
    protected $pay;

    public static function withUrl($text, $url)
    {
        return self::create()->setUrl($url)->setText($text);
    }

    /**
     * @param mixed $text
     * @return InlineKeyboardButton
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @param mixed $url
     * @return InlineKeyboardButton
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public static function withCallbackData($text, $data)
    {
        return self::create()->setCallbackData($data)->setText($text);
    }

    /**
     * @param mixed $callback_data
     * @return InlineKeyboardButton
     */
    public function setCallbackData($callback_data)
    {
        $this->callback_data = $callback_data;
        return $this;
    }

    public static function withSwitchInlineQueryCurrentChat($text, $query)
    {
        return self::create()->setSwitchInlineQueryCurrentChat($query)->setText($text);
    }

    /**
     * @param mixed $switch_inline_query_current_chat
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQueryCurrentChat($switch_inline_query_current_chat)
    {
        $this->switch_inline_query_current_chat = $switch_inline_query_current_chat;
        return $this;
    }

    public static function withCallBackGame($text, $callbackGame)
    {
        return self::create()->setCallbackGame($callbackGame)->setText($text);
    }

    /**
     * @param mixed $callback_game
     * @return InlineKeyboardButton
     */
    public function setCallbackGame($callback_game)
    {
        $this->callback_game = $callback_game;
        return $this;
    }

    public static function withPayment($text)
    {
        return self::create()->setPay(true)->setText($text);
    }

    /**
     * @param mixed $pay
     * @return InlineKeyboardButton
     */
    public function setPay($pay)
    {
        $this->pay = $pay;
        return $this;
    }

    /**
     * @param mixed $switch_inline_query
     * @return InlineKeyboardButton
     */
    public function setSwitchInlineQuery($switch_inline_query)
    {
        $this->switch_inline_query = $switch_inline_query;
        return $this;
    }
}