<?php

namespace TelegramBot\Api\State;

use function array_key_exists;

class State
{
    /** @var StateRoute */
    public $route;
    /** @var StateDataArray */
    public $data;

    protected $defaultPath = '/';

    public function __construct(array $route = [], array $data = [])
    {
        $this->setData($data);
        if (!array_key_exists('path', $route)) {
            $route['path'] = $this->defaultPath;
        }
        if (!array_key_exists('variables', $route)) {
            $route['variables'] = [];
        }
        $this->setRoute($route['path'], $route['variables']);
    }

    public function setData(array $data)
    {
        $this->data = new StateDataArray($data);
    }

    public function setRoute($path, $routeVars = [])
    {
        $this->route = new StateRoute($path);
        $this->route->variables->overwrite($routeVars);
    }

    protected function stateChanged($checkRouteVars = false)
    {
        if ($checkRouteVars && $this->route->variables->dataChanged()) {
            return true;
        }
        return $this->route->pathChanged() || $this->data->dataChanged();
    }

    protected function resetStateChangeStatus()
    {
        $this->route->resetPathCopy();
        $this->route->variables->resetDataCopy();

        $this->data->resetDataCopy();
    }

    public static function restoreArray(array $stateAsArray)
    {
        return new static(self::getRouteFromArray($stateAsArray), self::getDataFromArray($stateAsArray));
    }

    public static function getDataFromArray(array $stateAsArray, $default = [], $key = 'data')
    {
        return array_key_exists($key, $stateAsArray) && is_array($stateAsArray[$key]) ? $stateAsArray[$key] : $default;
    }

    public static function getRouteFromArray(array $stateAsArray, $default = ['path' => '/'], $key = 'route')
    {
        return array_key_exists($key, $stateAsArray) && is_array($stateAsArray[$key]) ? $stateAsArray[$key] : $default;
    }

    public function toArray($includeRouteVars = false)
    {
        $result = [
            'route' => [
                'path' => $this->route->getPathCopy(),
                //'variables' => $this->route->variables->getDataCopy()
            ],
            'data' => $this->data->getDataCopy()
        ];
        if ($includeRouteVars) {
            $result['route']['variables'] = $this->route->variables->getDataCopy();
        }
        return $result;
    }
}