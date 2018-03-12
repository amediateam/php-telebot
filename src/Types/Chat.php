<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\TelegramException;
use TelegramBot\Api\Methods\getChatAdministrators;
use TelegramBot\Api\Methods\getChatMember;
use TelegramBot\Api\Methods\getChatMembersCount;

/**
 * @method integer getId()
 * @method string getType()
 * @method string getTitle()
 * @method string getUsername()
 * @method string getFirstName()
 * @method string getLastName()
 * @method boolean getAllMembersAreAdministrators()
 * @method ChatPhoto getPhoto()
 * @method string getDescription()
 * @method string getInviteLink()
 * @method Message getPinnedMessage()
 * @method string getStickerSetName()
 * @method boolean getCanSetStickerSet()
 */
class Chat extends BaseType
{
    const TYPE_PRIVATE = 'private';
    const TYPE_GROUP = 'group';
    const TYPE_SUPER_GROUP = 'supergroup';
    const TYPE_CHANNEL = 'channel';
    /** @var int|null */
    protected $id;
    /** @var null|string */
    protected $type;
    /** @var null|string */
    protected $title;
    /** @var null|string */
    protected $username;
    /** @var null|string */
    protected $first_name;
    /** @var null|string */
    protected $last_name;
    /** @var bool|null */
    protected $all_members_are_administrators;
    /** @var null|ChatPhoto */
    protected $photo;
    /** @var null|string */
    protected $description;
    /** @var null|string */
    protected $invite_link;
    /** @var null|Message */
    protected $pinned_message;
    /** @var null|string */
    protected $sticker_set_name;
    /** @var bool|null */
    protected $can_set_sticker_set;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->id = $this->getPropertyFromData('id', 'int');
        $this->type = $this->getPropertyFromData('type', 'string');
        $this->title = $this->getPropertyFromData('title', 'string');
        $this->username = $this->getPropertyFromData('username', 'string');
        $this->first_name = $this->getPropertyFromData('first_name', 'string');
        $this->last_name = $this->getPropertyFromData('last_name', 'string');
        $this->all_members_are_administrators = $this->getPropertyFromData('all_members_are_administrators', 'bool');
        $this->photo = $this->getPropertyFromData('photo', ChatPhoto::class);
        $this->description = $this->getPropertyFromData('description', 'string');
        $this->invite_link = $this->getPropertyFromData('invite_link', 'string');
        $this->pinned_message = $this->getPropertyFromData('pinned_message', Message::class);
        $this->sticker_set_name = $this->getPropertyFromData('sticker_set_name', 'string');
        $this->can_set_sticker_set = $this->getPropertyFromData('can_set_sticker_set', 'bool');
    }

    public function isPrivate()
    {
        return $this->getType() == self::TYPE_PRIVATE;
    }

    public function isGroup()
    {
        return $this->getType() == self::TYPE_GROUP || $this->getType() == self::TYPE_SUPER_GROUP;
    }

    public function isChannel()
    {
        return $this->getType() == self::TYPE_CHANNEL;
    }

    /**
     * @param $user_id
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function getChatMember($user_id)
    {
        return getChatMember::create($this->botApi)->setChatId($this->getId())->setUserId($user_id)->execute();
    }

    /**
     * @return mixed
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function getChatMembersCount()
    {
        if ($this->isPrivate()) {
            throw new TelegramException("There is only one person in private chat!");
        }
        return getChatMembersCount::create($this->botApi)->setChatId($this->getId())->execute();
    }

    /**
     * @return mixed
     * @throws TelegramException
     */
    public function getChatAdministrators()
    {
        if ($this->isPrivate()) {
            throw new TelegramException("There is no administrator in private chat!");
        }
        return getChatAdministrators::create($this->botApi)->setChatId($this->getId())->execute();
    }
}
