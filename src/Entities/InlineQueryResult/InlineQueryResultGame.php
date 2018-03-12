<?php

namespace TelegramBot\Api\Entities\InlineQueryResult;

use TelegramBot\Api\Entities\ReplyMarkup\InlineKeyboardMarkup;

class InlineQueryResultGame extends InlineQueryResult
{
    /** @var string */
    protected $type = 'game';
    /** @var string */
    protected $id;
    /** @var string */
    protected $game_short_name;
    /** @var InlineKeyboardMarkup */
    protected $reply_markup;

    /**
     * @param string $id
     * @return InlineQueryResultGame
     */
    public function setId(string $id): InlineQueryResultGame
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $game_short_name
     * @return InlineQueryResultGame
     */
    public function setGameShortName(string $game_short_name): InlineQueryResultGame
    {
        $this->game_short_name = $game_short_name;
        return $this;
    }

    /**
     * @param InlineKeyboardMarkup $reply_markup
     * @return InlineQueryResultGame
     */
    public function setReplyMarkup(InlineKeyboardMarkup $reply_markup): InlineQueryResultGame
    {
        $this->reply_markup = $reply_markup;
        return $this;
    }
}