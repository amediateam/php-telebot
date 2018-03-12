<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getName()
 * @method string getTitle()
 * @method boolean getContainsMasks()
 * @method Sticker[] getStickers()
 */
class StickerSet extends BaseType
{
    protected $name;
    protected $title;
    protected $contains_masks;
    protected $stickers;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->name = $this->getPropertyFromData('name', 'string');
        $this->title = $this->getPropertyFromData('title', 'string');
        $this->contains_masks = $this->getPropertyFromData('contains_masks', 'bool');
        $this->stickers = [];
        if (isset($data['stickers']) && is_array($data['stickers'])) {
            foreach ($data['stickers'] as $sticker) {
                $this->stickers = new Sticker($sticker, $botApi);
            }
        }
    }

}
