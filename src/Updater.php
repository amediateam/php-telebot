<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Types\Update;

class Updater
{
    private $dispatcher;

    public function __construct($token)
    {
        $this->dispatcher = new Dispatcher($token);
    }

    public function getDispatcher()
    {
        return $this->dispatcher;
    }

    public function getBot()
    {
        return $this->dispatcher->getBot();
    }

    public function handleWebhookUpdate()
    {
        $data = stream_get_contents(STDIN);
        try {
            $data = \GuzzleHttp\json_decode($data);;
        } catch (\InvalidArgumentException $e) {
            return false;
        }
        try {
            if (Update::validate($data)) {
                $this->getDispatcher()->processUpdate(Update::fromResponse($this->getBot(), $data));
            }
        } catch (InvalidArgumentException $e) {
            return false;
        }
        return false;
    }

    public function start_polling($offset = null, $limit = 100, $timeout = 60, array $allowedUpdates = [], $sleepTime = 0)
    {
        $loop = true;
        if (function_exists("pcntl_signal")) {
            $signalHandler = function ($signal) use ($loop) {
                $loop = false;
            };
            pcntl_signal(SIGTERM, $signalHandler);
            pcntl_signal(SIGHUP, $signalHandler);
        }
        while ($loop) {
            $updates = $this->getDispatcher()->getBot()->getUpdates($offset + 1, $limit, $timeout, $allowedUpdates);
            foreach ($updates as $update) {
                $this->getDispatcher()->processUpdate($update);
            }
            $offset = $updates[sizeof($updates) - 1]->getUpdateId();
            if ($sleepTime > 0) {
                sleep($sleepTime);
            }
        }
        return $offset;
    }
}