<?php

namespace TelegramBot\Api;
class State
{
    protected $route = '/';
    protected $params = [];
    protected $variables = [];

    public function __construct($route = '/', array $params = [], $variables = [])
    {
        $this->route = $route;
        $this->params = $params;
        $this->variables = $variables;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getRouteVariables()
    {
        return $this->variables;
    }

    public function setRouteVariables(array $variables)
    {
        $this->variables = $variables;
    }

    public function setParams(array $params)
    {
        $this->params = $params;
    }

    public function mergeParams(array $params)
    {
        $this->setParams(array_merge($this->getParams(), $params));
    }

    public function &getParamsReference()
    {
        return $this->params;
    }

    /**
     * @param $data
     * @return State
     * @throws \InvalidArgumentException
     */
    public static function decode($data)
    {
        $data = \GuzzleHttp\json_decode($data, true);
        return new self($data['route'], $data['params']);
    }

    public function encode()
    {
        return json_encode(['route' => $this->route, 'params' => $this->params]);
    }
}