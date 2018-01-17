<?php
namespace TelegramBot\Api;

use TelegramBot\Api\Types\Update;
use function call_user_func_array;

class StatelessDispatcher extends Dispatcher
{
    public function processUpdate(Update $update)
    {
        try {
            foreach ($this->handlers as $handler) {
                /** @var $handler BaseHandler */
                if(($result = $this->checkAndRun($handler, $update)) !== -1){
                    return $result;
                }
            }
        } catch (\Exception $e) {
            foreach ($this->errorHandlers as $callback) {
                /** @var $callback callable */
                call_user_func_array($callback, [$this->botApi, $update, $e]);
            }
        }
        return false;
    }
}