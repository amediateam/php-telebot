<?php
namespace TelegramBot\Api;
class Dispatcher
{
    /** @var BotApi */
    protected $botApi;

    public function __construct($token)
    {
        $this->botApi = new BotApi($token);
    }

    /**
     * @return BotApi
     */
    public function getBot()
    {
        return $this->botApi;
    }
}