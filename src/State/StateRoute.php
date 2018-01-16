<?php
namespace TelegramBot\Api\State;
class StateRoute
{
    private $pathCopy;

    public $path = '/';
    /** @var StateDataArray */
    public $variables;

    public function __construct($path = '/', array $variables = [])
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
}