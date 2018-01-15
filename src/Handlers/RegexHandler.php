<?php

namespace TelegramBot\Api\Handlers;

use function call_user_func_array;
use function preg_match;
use TelegramBot\Api\BaseHandler;
use TelegramBot\Api\Dispatcher;
use TelegramBot\Api\Filters\Filters;
use TelegramBot\Api\Handlers\Abstracts\AbstractRegexHandler;
use TelegramBot\Api\State;
use TelegramBot\Api\Types\Update;

class RegexHandler extends BaseHandler
{
    protected $regex;
    protected $filters;
    protected $messageUpdates;
    protected $channelPostUpdates;
    protected $editedUpdates;

    public function __construct($regex, AbstractRegexHandler $callback, array $filters = [], $messageUpdates = true, $channelPostUpdates = true, $editedUpdates = false)
    {
        $this->regex = $regex;
        $this->filters = $filters;
        $this->messageUpdates = $messageUpdates;
        $this->channelPostUpdates = $channelPostUpdates;
        $this->editedUpdates = $editedUpdates;
        parent::__construct($callback);
    }

    public function checkUpdate(Update $update, State $state = null)
    {
        foreach ($this->filters as $filter) {
            if (!$filter::filter($update)) return false;
        }
        if ((bool)$update->getMessage()->getText() !== false &&
            substr($update->getMessage()->getText(), 0, 1) == '/') {
            return false;
        } else if (!$this->editedUpdates && $update->isEdited()) {
            return false;
        } else if (!$this->messageUpdates && ($update->getMessage() || $update->getEditedMessage())) {
            return false;
        } else if (!$this->channelPostUpdates && $update->isChannelPost()) {
            return false;
        } else if (false === (bool)preg_match($this->regex, $update->getEffectiveMessage()->getText())) {
            return false;
        }
        return true;
    }

    public function handleUpdate(Update $update, Dispatcher $dispatcher, State $state = null)
    {
        preg_match($this->regex, $update->getEffectiveMessage()->getText(), $matches);
        /** @var $instance AbstractRegexHandler */
        $instance = clone $this->callback;
        $instance->setState($state);
        $instance->init($dispatcher->getBot(), $update, $update->getMessage());
        $result = $instance->handle($matches);
        //TODO: destruct
        return $result;
    }
}