<?php

namespace TelegramBot\Api\Traits;

use TelegramBot\Api\BotApi;

trait Downloadable
{
    /**
     * @param $savePath
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function download($savePath)
    {
        /** @var $bot BotApi */
        $bot = $this->getBot();
        return $bot->downloadFile($this->getFileId(), $savePath);
    }
}