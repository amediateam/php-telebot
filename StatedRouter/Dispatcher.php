<?php

namespace StatedRouter;

use StatedRouter\Dispatcher\DispatcherResult;

interface Dispatcher {
    const NOT_FOUND = 0;
    const FOUND = 1;

    /**
     * Dispatches against the provided HTTP method verb and URI.
     *
     * Returns array with one of the following formats:
     *
     *     [self::NOT_FOUND]
     *     [self::FOUND, $handler, ['varName' => 'value', ...]]
     *
     * @param string $uri
     *
     * @return DispatcherResult
     */
    public function dispatch($uri);
}
