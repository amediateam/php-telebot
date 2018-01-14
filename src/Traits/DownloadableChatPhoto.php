<?php

namespace TelegramBot\Api\Traits;

use TelegramBot\Api\BotApi;

trait DownloadableChatPhoto
{
    /**
     * @param $savePath
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function downloadSmall($savePath)
    {
        /** @var $bot BotApi */
        $bot = $this->getBot();
        return $bot->downloadFile($this->getSmallFileId(), $savePath);
    }

    /**
     * @param $savePath
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function downloadBig($savePath)
    {
        /** @var $bot BotApi */
        $bot = $this->getBot();
        return $bot->downloadFile($this->getBigFileId(), $savePath);
    }
}