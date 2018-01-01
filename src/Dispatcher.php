<?php

namespace TelegramBot\Api;

use function array_push;
use function array_search;
use function function_exists;
use function pcntl_signal;
use const SIGHUP;
use const SIGKILL;
use const STDIN;
use function stream_get_contents;
use TelegramBot\Api\Types\Update;

class Dispatcher
{
    const DEFAULT_GROUP = 0;

    /** @var BotApi */
    protected $botApi;
    /**
     * @var array BaseHandler[]
     */
    protected $handlerGroups = [];

    public function __construct($token)
    {
        $this->botApi = new BotApi($token);
    }


    public function addHandler(BaseHandler $handler, $group = self::DEFAULT_GROUP)
    {
        if (!isset($this->handlerGroups[$group])) {
            $this->handlerGroups[$group] = [];
        }
        array_push($this->handlerGroups[$group], $handler);
    }

    public function removeHandler(BaseHandler $handler, $group = self::DEFAULT_GROUP)
    {
        if (!isset($this->handlerGroups[$group])) {
            $this->handlerGroups[$group] = [];
        }
        $search = array_search($handler, $this->handlerGroups[$group]);
        if ($search !== false) {
            unset($this->handlerGroups[$group][$search]);
        }
        if (!sizeof($this->handlerGroups[$group])) {
            unset($this->handlerGroups[$group]);
        }
    }

    public function processUpdate(Update $update)
    {
        foreach ($this->handlerGroups as $handlerGroup) {
            foreach ($handlerGroup as $handler) {
                /** @var $handler BaseHandler */
                if ($handler->checkUpdate($update)) {
                    return $handler->handleUpdate($update, $this);
                }
            }
        }
        return false;
    }

    /**
     * @return BotApi
     */
    public function getBot()
    {
        return $this->botApi;
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
                $this->processUpdate(Update::fromResponse($this->getBot(), $data));
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
            pcntl_signal(SIGKILL, $signalHandler);
        }
        while ($loop) {
            $updates = $this->getBot()->getUpdates($offset + 1, $limit, $timeout, $allowedUpdates);
            foreach ($updates as $update) {
                $this->processUpdate($update);
            }
            $offset = $updates[sizeof($updates) - 1]->getUpdateId();
            if ($sleepTime > 0) {
                sleep($sleepTime);
            }
        }
        return $offset;
    }
}