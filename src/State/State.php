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
        $this->setRoute($route['path']);
    }

    public function setData(array $data)
    {
        $this->data = new StateDataArray($data);
    }

    public function setRoute($path)
    {
        $this->route = new StateRoute($path);
    }

    protected function stateChanged()
    {
        return $this->route->pathChanged() || $this->data->dataChanged();
    }

    protected function resetStateChangeStatus()
    {
        $this->route->resetPathCopy();
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

    public function toArray()
    {
        $result = [
            'route' => [
                'path' => $this->route->getPathCopy(),
                //'variables' => $this->route->variables->getDataCopy()
            ],
            'data' => $this->data->getDataCopy()
        ];
        return $result;
    }
}