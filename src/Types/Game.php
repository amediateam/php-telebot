<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getTitle()
 * @method string getDescription()
 * @method PhotoSize[] getPhoto()
 * @method string getText()
 * @method MessageEntity[] getTextEntities()
 * @method Animation getAnimation()
 */
class Game extends BaseType
{
    /** @var bool|int|null|string */
    protected $title;
    /** @var bool|int|null|string */
    protected $description;
    /** @var bool|int|null|string */
    protected $photo;
    /** @var bool|int|null|string */
    protected $text;
    /** @var bool|int|null|string */
    protected $text_entities;
    /** @var bool|int|null|string */
    protected $animation;

    public function __construct(array $data, BotApi $bot)
    {
        parent::__construct($data, $bot);
        $this->title = $this->getPropertyFromData('title', 'string');
        $this->description = $this->getPropertyFromData('description', 'string');
        $this->photo = [];
        if (isset($data['photo']) && is_array($data['photo'])) {
            foreach ($data['photo'] as $photo) {
                $this->photo = new PhotoSize($photo, $bot);
            }
        }
        $this->text = $this->getPropertyFromData('text', 'string');
        $this->text_entities = [];
        if (isset($data['text_entities']) && is_array($data['text_entities'])) {
            foreach ($data['text_entities'] as $entity) {
                $this->text_entities[] = new MessageEntity($entity, $bot);
            }
        }
        $this->animation = $this->getPropertyFromData('animation', Animation::class);
    }
}
