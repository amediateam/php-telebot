<?php

namespace TelegramBot\Api;

use function array_search;
use TelegramBot\Api\Extension\InputFile;

/**
 * Class BaseType
 * Base class for Telegram Methods
 *
 * @package TelegramBot\Api
 */
abstract class BaseMethod extends KeyValuePairStore
{
    protected $method;
    public function __construct()
    {
        $this->setBot($bot);
    }
    public function getMethod()
    {
        return $this->method;
    }
}
