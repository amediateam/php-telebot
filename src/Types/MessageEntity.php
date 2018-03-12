<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getType()
 * @method integer getOffset()
 * @method integer getLength()
 * @method string getUrl()
 * @method User getUser()
 */
class MessageEntity extends BaseType
{
    const TYPE_MENTION = 'mention';
    const TYPE_HASHTAG = 'hashtag';
    const TYPE_BOT_COMMAND = 'bot_command';
    const TYPE_URL = 'url';
    const TYPE_EMAIL = 'email';
    const TYPE_BOLD = 'bold';
    const TYPE_ITALIC = 'italic';
    const TYPE_CODE = 'code';
    const TYPE_PRE = 'pre';
    const TYPE_TEXT_LINK = 'text_link';
    /** @var string */
    protected $type;
    /** @var int */
    protected $offset;
    /** @var int */
    protected $length;
    /** @var string|null */
    protected $url;
    /** @var User|null */
    protected $user;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->type = $this->getPropertyFromData('type', 'string');
        $this->offset = $this->getPropertyFromData('offset', 'integer');
        $this->length = $this->getPropertyFromData('length', 'integer');
        $this->url = $this->getPropertyFromData('url', 'string');
        $this->user = $this->getPropertyFromData('url', User::class);
    }
}
