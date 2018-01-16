<?php
namespace TelegramBot\Api\State;
use TelegramBot\Api\Types\Update;
abstract class StateDetectorAbstract
{
    abstract public function getState(Update $update);
}