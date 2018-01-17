<?php

namespace TelegramBot\Api;

use TelegramBot\Api\State\State;
use TelegramBot\Api\State\StateDetectorAbstract;
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
        if ($update->isStateAware()) { //they are stateless
            /** @var $state State */
            $state = $this->stateDetector->getState($update);
        }
        if (is_callable($this->callback) &&
            !call_user_func_array($this->callback, [$this->botApi, $update, $state, $this])) {
            return false; //bypass process
        }
        try {
            foreach ($this->forceHandlers as $handler) {
                /** @var $handler BaseHandler */
                if (($result = $this->checkAndRun($handler, $update, $state)) !== -1) {
                    return $result;
                }
            }
            if (!is_null($state)) {
                $routeInfo = $this->dispatcher->dispatch($state->route->getPath());
                if ($routeInfo->found()) {
                    $state->route->variables->overwrite($routeInfo->getVariables());
                    if (is_callable($routeInfo->getCallback())) {
                        return call_user_func_array($routeInfo->getCallback(), [
                            $this->getBot(),
                            $update,
                            $state
                        ]);
                    } else {
                        /** @var $callback HandlerCollector */
                        $callback = $routeInfo->getCallback();
                        if (!($callback instanceof HandlerCollector)) {
                            throw new InvalidCallbackException("Callback must be instance of " . HandlerCollector::class);
                        }
                        foreach ($callback->getHandlers() as $handler) {
                            /** @var $handler BaseHandler */
                            if (($result = $this->checkAndRun($handler, $update, $state)) !== -1) {
                                return $result;
                            }
                        }
                    }
                }
            }
            foreach ($this->handlers as $handler) {
                /** @var $handler BaseHandler */
                if (($result = $this->checkAndRun($handler, $update, $state)) !== -1) {
                    return $result;
                }
            }
        } catch (\Exception $e) {
            foreach ($this->errorHandlers as $callback) {
                /** @var $callback callable */
                call_user_func_array($callback, [$this->botApi, $update, $e]);
            }
        }
        return false;
    }
}