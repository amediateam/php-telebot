<?php
namespace TelegramBot\Api\State;
class StateRoute
{
    private $pathCopy;

    public $path = '/';

    public function __construct($path = '/')
    {
        $this->path = $this->pathCopy = $path;
    }

    public function &getPath()
    {
        return $this->path;
    }

    public function getPathCopy()
    {
        return $this->path;
    }

    public function redirect($path)
    {
        $this->path = $path;
    }

    public function pathChanged()
    {
        return $this->path != $this->pathCopy;
    }

    public function resetPathCopy()
    {
        $this->pathCopy = $this->path;
    }
}