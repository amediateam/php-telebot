<?php

namespace TelegramBot\Api;

use Exception;
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
        if (is_callable($this->callback) &&
            !call_user_func_array($this->callback, [$this->botApi, $update, $this])) {
            return false; //bypass process
        }
        $state = null;
        if (!$update->isStateAware()) { //they are stateless
            /** @var $state State */
            $state = $this->stateDetector->getState($update);
        }
        try {
            foreach ($this->forceHandlers as $handler) {
                /** @var $handler BaseHandler */
                if (($result = $this->checkAndRun($handler, $update)) !== -1) {
                    return $result;
                }
            }
            if (!is_null($state)) {
                $result = $this->dispatcher->dispatch($state->route->getPath());
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
                        $state->route->variables->overwrite($result->getVariables());
                        foreach ($callback->getHandlers() as $handler) {
                            /** @var $handler BaseHandler */
                            if (($result = $this->checkAndRun($handler, $update)) !== -1) {
                                return $result;
                            }
                        }
                    }
                }
            }
            foreach ($this->handlers as $handler) {
                /** @var $handler BaseHandler */
                if (($result = $this->checkAndRun($handler, $update)) !== -1) {
                    return $result;
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            //TODO: log
        }
        return false;
    }
}