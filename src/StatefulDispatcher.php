<?php

namespace TelegramBot\Api;

use Exception;
use TelegramBot\Api\Types\Update;

class StatefulDispatcher extends Dispatcher
{
    protected $stateDetector;
    protected $dispatcher;
    protected $handlers = [];

    public function __construct($token, StateDetectorAbstract $stateDetector, \StatedRouter\Dispatcher $dispatcher)
    {
        $this->stateDetector = $stateDetector;
        $this->dispatcher = $dispatcher;
        parent::__construct($token);
    }

    public function processUpdate(Update $update)
    {
        $state = $this->stateDetector->getState($update);
        try {
            $result = $this->dispatcher->dispatch($state->getRoute());
            if ($result->found()) {
                /** @var $callback HandlerCollector */
                $callback = $result->getCallback();
                if (!($callback instanceof HandlerCollector)) {
                    throw new InvalidCallbackException("Callback must be instance of " . HandlerCollector::class);
                }
                $state->setRouteVariables($result->getVariables());
                foreach ($callback->getHandlers() as $handler) {
                    /** @var $handler BaseHandler */
                    if ($handler->checkUpdate($update, $state)) {
                        return $handler->handleUpdate($update, $this, $state);
                    }
                }
            }
            foreach ($this->handlers as $handler) {
                /** @var $handler BaseHandler */
                if ($handler->checkUpdate($update, $state)) {
                    return $handler->handleUpdate($update, $this, $state);
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            //TODO: log
        }
        return false;
    }
}