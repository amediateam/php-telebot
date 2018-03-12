<?php
namespace TelegramBot\Api\Methods;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Types\StickerSet;

/**
 * @method getStickerSet setName(string $name)
 */
class getStickerSet extends BaseMethod
{
    protected $map = [
        'name',
    ];

    /**
     * @param BotApi|null $botApi
     * @return StickerSet
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function execute(BotApi $botApi = null)
    {
        return parent::execute($botApi);
    }

    /**
     * @param array $response
     * @return StickerSet
     */
    public function toResult(array $response)
    {
        return new StickerSet($response, $this->botApi);
    }
}
