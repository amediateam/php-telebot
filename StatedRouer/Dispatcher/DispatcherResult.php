<?php

namespace StatedRouter\Dispatcher;

use function call_user_func_array;

class DispatcherResult
{
    protected $status;
    protected $callback;
    protected $variables;

    public function __construct($status, callable $callback = null, array $variables = [])
    {
        $this->status = $status;
        $this->callback = $callback;
        $this->variables = $variables;
    }

    public function getCallback()
    {
        return $this->callback;
    }

    public function getVariables()
    {
        return $this->variables;
    }

    public function callCallbackWithVariables()
    {
        return call_user_func_array($this->callback, $this->variables);
    }

    public function found()
    {
        return $this->status == RegexBasedAbstract::FOUND;
    }

    public function notFound()
    {
        return $this->status == RegexBasedAbstract::NOT_FOUND;
    }
}