<?php

namespace TelegramBot\Api;

use Exception;
use TelegramBot\Api\Types\Update;

class StatelessDispatcher extends Dispatcher
{
    /**
     * @var array BaseHandler[]
     */
    protected $handlers = [];

    public function processUpdate(Update $update)
    {
        if (is_callable($this->callback) &&
            !call_user_func_array($this->callback, [$this, $this->botApi, $update])) {
            return false; //bypass process
        }
        try {
            foreach ($this->forceHandlers as $handler) {
                /** @var $handler BaseHandler */
                if (is_array($handler)) {
                    //when passing an array you want to call a specific method of

                    if (($result = $this->checkAndRun($handler, $update)) !== -1) {
                        return $result;
                    }


                } else if (($result = $this->checkAndRun($handler, $update)) !== -1) {
                    return $result;
                }
            }
            foreach ($this->handlers as $handler) {
                /** @var $handler BaseHandler */
                if ($handler->checkUpdate($update)) {
                    return $handler->handleUpdate($update, $this);
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            //TODO: log
        }
        return false;
    }
}