<?php

namespace TelegramBot\Api;

use Exception;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Types\Update;

class StatefulDispatcher extends Dispatcher
{
    protected $stateDetector;
    protected $dispatcher;

    public function __construct($token, StateDetectorAbstract $stateDetector, \StatedRouter\Dispatcher $dispatcher)
    {
        $this->stateDetector = $stateDetector;
        $this->dispatcher = $dispatcher;
        parent::__construct($token);
    }

    public function processUpdate(Update $update)
    {
        $state = null;
        if(!Filters::$statusUpdate::filter($update)){ //they are stateless
            /** @var $state State */
            $state = $this->stateDetector->getState($update);
        }
        try {
            foreach ($this->forceHandlers as $handler) {
                /** @var $handler BaseHandler */
                if ($handler->checkUpdate($update, $state)) {
                    return $handler->handleUpdate($update, $this, $state);
                }
            }
            if(!is_null($state)){
                $result = $this->dispatcher->dispatch($state->getRoute());
                if ($result->found()) {
                    if (is_callable($result->getCallback())) {
                        return call_user_func_array($result->getCallback(), [
                            $this->getBot(),
                            $update,
                            $result->getVariables()
                        ]);
                    } else {
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