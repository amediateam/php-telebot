<?php

namespace TelegramBot\Api;

use function array_push;
use function array_search;
use Exception;
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
        try {
            foreach ($this->handlerGroups as $handlerGroup) {
                foreach ($handlerGroup as $handler) {
                    /** @var $handler BaseHandler */
                    if ($handler->checkUpdate($update)) {
                        return $handler->handleUpdate($update, $this);
                    }
                }
            }
        } catch (Exception $e){
            echo $e->getMessage();
            //TODO: log
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
}