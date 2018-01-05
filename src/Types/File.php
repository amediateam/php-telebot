<?php
namespace TelegramBot\Api\Types;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Generated\Types;
use TelegramBot\Api\Traits\Downloadable;

class File extends Types\File
{
    use Downloadable;
}
