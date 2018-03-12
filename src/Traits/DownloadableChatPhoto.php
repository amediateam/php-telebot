<?php

namespace TelegramBot\Api\Traits;

use TelegramBot\Api\BotApi;

trait DownloadableChatPhoto
{
    /** @var string */
    protected $small_file_id;
    /** @var string */
    protected $big_file_id;
    /** @var BotApi */
    protected $botApi;

    /**
     * @param $savePath
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function downloadSmall($savePath)
    {
        /** @var $bot BotApi */
        return $this->botApi->downloadFile($this->small_file_id, $savePath);
    }

    /**
     * @param $savePath
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function downloadBig($savePath)
    {
        return $this->botApi->downloadFile($this->big_file_id, $savePath);
    }
}