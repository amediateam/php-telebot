<?php

namespace TelegramBot\Api\State;
class StateDataArray
{
    private $data = [], $dataCopy = [];
    private $dataChanged = false;

    public function __construct($data = [])
    {
        $this->data = $this->dataCopy = $data;
    }

    public function &getData()
    {
        return $this->data;
    }

    public function getDataCopy()
    {
        return $this->data;
    }

    public function getKey($key, $default = null)
    {
        return array_key_exists($key, $this->data) ? $this->dataChanged[$key] : $default;
    }

    public function setKey($key, $value)
    {
        $this->data[$key] = $value;
        $this->dataChanged = true;
    }

    public function merge(array $params)
    {
        $this->overwrite(array_merge($this->getData(), $params));
    }

    public function overwrite(array $data)
    {
        $this->data = $data;
        $this->dataChanged = true;
    }

    public function dataChanged()
    {
        return $this->dataChanged || !($this->data === $this->dataCopy);
    }

    public function resetDataCopy()
    {
        $this->dataChanged = false;
        $this->dataCopy = $this->data;
    }
}