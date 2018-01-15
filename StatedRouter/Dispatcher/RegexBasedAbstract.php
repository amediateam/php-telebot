<?php

namespace StatedRouter\Dispatcher;

use StatedRouter\Dispatcher;

abstract class RegexBasedAbstract implements Dispatcher
{
    /** @var mixed[][] */
    protected $staticRouteMap = [];

    /** @var mixed[] */
    protected $variableRouteData = [];

    /**
     * @return mixed[]
     */
    protected abstract function dispatchVariableRoute($routeData, $uri);

    public function dispatch($uri)
    {
        if (isset($this->staticRouteMap[$uri])) {
            $handler = $this->staticRouteMap[$uri];
            return new DispatcherResult(self::FOUND, $handler);
        }

        $varRouteData = $this->variableRouteData;
        if (isset($varRouteData)) {
            $result = $this->dispatchVariableRoute($varRouteData, $uri);
            if ($result[0] === self::FOUND) {
                return new DispatcherResult($result[0], $result[1], $result[2]);
            }
        }
        // route simply does not exist
        return new DispatcherResult(self::NOT_FOUND);
    }
}
