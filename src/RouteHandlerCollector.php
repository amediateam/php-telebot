<?php

namespace TelegramBot\Api;
class RouteHandlerCollector
{
    protected $route;
    protected $handlers;

    public function __construct($route, $handlers = [])
    {
        $this->route = $route;
        $this->handlers = $handlers;
    }

    public function getHandlers()
    {
        return $this->handlers;
    }

    public function addHandler(BaseHandler $handler)
    {
        array_push($this->handlers, $handler);
        return $this;
    }

    public function addBatchHandler(array $handlers)
    {
        foreach ($handlers as $handler) {
            array_push($this->handlers, $handler);
        }
        return $this;
    }

    public function removeHandler(BaseHandler $handler)
    {
        $search = array_search($handler, $this->handlers);
        if ($search !== false) {
            unset($this->handlers[$search]);
        }
        return $this;
    }
}