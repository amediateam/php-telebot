<?php

namespace TelegramBot\Api\Traits;

use TelegramBot\Api\BotApi;

trait Downloadable
{
    /** @var string */
    protected $file_id;
    /** @var BotApi */
    protected $botApi;

    /**
     * @param $savePath
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function download($savePath)
    {
        return $this->botApi->downloadFile($this->file_id, $savePath);
    }

    /**
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function downloadFileContents()
    {
        return $this->botApi->downloadFileContents($this->file_id);
    }
}