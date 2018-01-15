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
        try {
            foreach ($this->forceHandlers as $handler) {
                /** @var $handler BaseHandler */
                if ($handler->checkUpdate($update)) {
                    return $handler->handleUpdate($update, $this);
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