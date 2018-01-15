<?php

namespace TelegramBot\Api;

use Exception;
use TelegramBot\Api\Types\Update;

class Dispatcher
{
    /** @var BotApi */
    protected $botApi;
    /**
     * @var array BaseHandler[]
     */
    protected $handlers = [];
    /**
     * @var array BaseHandler[][]
     */
    protected $globalHandlers = [];

    public function __construct($token)
    {
        $this->botApi = new BotApi($token);
    }

    public function addHandler(BaseHandler $handler, $section = null)
    {
        if (is_null($section)) {
            array_push($this->globalHandlers, $handler);
        } else {
            if (!isset($this->handlers[$section])) {
                $this->handlers[$section] = [];
            }
            array_push($this->handlers[$section], $handler);
        }
    }

    public function addBatchHandler(array $handlers, $section = null)
    {
        if (is_null($section)) {
            foreach($handlers as $handler){
                array_push($this->globalHandlers, $handler);
            }
        } else {
            if (!isset($this->handlers[$section])) {
                $this->handlers[$section] = [];
            }
            foreach($handlers as $handler){
                array_push($this->handlers[$section], $handler);
            }
        }
    }

    public function removeHandler(BaseHandler $handler, $section = null)
    {
        if (is_null($section)) {
            $search = array_search($handler, $this->globalHandlers);
            if ($search !== false) {
                unset($this->globalHandlers[$search]);
            }
        } else {
            if (!isset($this->handlers[$section])) {
                $this->handlers[$section] = [];
            }
            $search = array_search($handler, $this->handlers[$section]);
            if ($search !== false) {
                unset($this->handlers[$section][$search]);
            }
            if (!sizeof($this->handlers[$section])) {
                unset($this->handlers[$section]);
            }
        }
    }

    public function processUpdate(Update $update, $section = null)
    {
        try {
            foreach ($this->globalHandlers as $handler) {
                /** @var $handler BaseHandler */
                if ($handler->checkUpdate($update)) {
                    return $handler->handleUpdate($update, $this);
                }
            }
            if (!is_null($section) && isset($this->handlers[$section]) && sizeof($this->handlers[$section])) {
                foreach ($this->handlers[$section] as $handler) {
                    /** @var $handler BaseHandler */
                    if ($handler->checkUpdate($update)) {
                        return $handler->handleUpdate($update, $this);
                    }
                }
            }
        } catch (Exception $e) {
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