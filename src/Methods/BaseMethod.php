<?php

namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\CaseConverter;
use TelegramBot\Api\Exceptions\TelegramException;
use function in_array;

abstract class BaseMethod
{
    protected $botApi;
    protected $map = [];
    protected $data = [];

    public function __construct(BotApi $botApi = null)
    {
        $this->botApi = $botApi;
    }

    public static function create(BotApi $botApi = null)
    {
        return new static($botApi);
    }

    /**
     * @param BotApi|null $botApi
     * @return mixed
     * @throws TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        if ($this->botApi) {
            return $this->botApi->execute($this);
        } else if ($botApi) {
            return $botApi->execute($this);
        }
        throw new TelegramException("BotApi not defined.");
    }

    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $name
     * @param $arguments
     * @throws TelegramException
     */
    public function __call($name, $arguments)
    {
        if (substr($name, 0, 3) == 'set') {
            $property = CaseConverter::toUnderscoreCase(substr($name, 3));
            if (in_array($property, $this->map)) {
                $this->data[$property] = $arguments[0];
                return $this;
            }
            throw new TelegramException("Invalid property.");
        }
        throw new TelegramException("Method not implemented.");
    }
}