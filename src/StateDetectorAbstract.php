<?php
namespace TelegramBot\Api;
use TelegramBot\Api\Types\Update;
abstract class StateDetectorAbstract
{
    abstract public function getState(Update $update): State;
}