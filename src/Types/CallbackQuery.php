<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\answerCallbackQuery;

/**
 * @method integer getId()
 * @method User getFrom()
 * @method Message getMessage()
 * @method integer getInlineMessageId()
 * @method string getChatInstance()
 * @method string getData()
 * @method string getGameShortName()
 */
class CallbackQuery extends BaseType
{
    /** @var int|null */
    protected $id;
    /** @var null|User */
    protected $from;
    /** @var null|Message */
    protected $message;
    /** @var mixed|null */
    protected $inline_message_id;
    /** @var mixed|null */
    protected $chat_instance;
    /** @var mixed|null */
    protected $data;
    /** @var mixed|null */
    protected $game_short_name;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->id = $this->getPropertyFromData('id', 'int');
        $this->from = $this->getPropertyFromData('from', User::class);
        $this->message = $this->getPropertyFromData('message', Message::class);
        $this->inline_message_id = $this->getPropertyFromData('inline_message_id', 'string');
        $this->chat_instance = $this->getPropertyFromData('chat_instance', 'string');
        $this->data = $this->getPropertyFromData('data', 'string');
        $this->game_short_name = $this->getPropertyFromData('game_short_name', 'string');
    }

    /**
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function answer()
    {
        answerCallbackQuery::create($this->botApi)
            ->setCallbackQueryId($this->id)
            ->execute();
    }

    /**
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function answerWithText($text, $showAlert = false, $cacheTime = null)
    {
        answerCallbackQuery::create($this->botApi)
            ->setCallbackQueryId($this->id)
            ->setText($text)
            ->setShowAlert($showAlert)
            ->setCacheTime($cacheTime)
            ->execute();
    }

    /**
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function answerWithUrl($url, $cacheTime = null)
    {
        answerCallbackQuery::create($this->botApi)
            ->setCallbackQueryId($this->id)
            ->setUrl($url)
            ->setCacheTime($cacheTime)
            ->execute();
    }
}
