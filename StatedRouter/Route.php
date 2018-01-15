<?php

namespace StatedRouter;

class Route {
    /** @var string */
    public $regex;

    /** @var array */
    public $variables;

    /** @var mixed */
    public $handler;

    /**
     * Constructs a route (value object).
     *
     * @param mixed  $handler
     * @param string $regex
     * @param array  $variables
     */
    public function __construct($handler, $regex, $variables) {
        $this->handler = $handler;
        $this->regex = $regex;
        $this->variables = $variables;
    }

    /**
     * Tests whether this route matches the given string.
     *
     * @param string $str
     *
     * @return bool
     */
    public function matches($str) {
        $regex = '~^' . $this->regex . '$~';
        return (bool) preg_match($regex, $str);
    }
}

