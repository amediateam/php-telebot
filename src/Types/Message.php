<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\deleteMessage;
use function is_array;

/**
 * @method integer getMessageId()
 * @method User getFrom()
 * @method integer getDate()
 * @method Chat getChat()
 * @method User getForwardFrom()
 * @method Chat getForwardFromChat()
 * @method integer getForwardFromMessageId()
 * @method string getForwardSignature()
 * @method integer getForwardDate()
 * @method Message getReplyToMessage()
 * @method integer getEditDate()
 * @method string getMediaGroupId()
 * @method string getAuthorSignature()
 * @method string getText()
 * @method MessageEntity[] getEntities()
 * @method MessageEntity[] getCaptionEntities()
 * @method Audio getAudio()
 * @method Document getDocument()
 * @method Game getGame()
 * @method PhotoSize[] getPhoto()
 * @method Sticker getSticker()
 * @method Video getVideo()
 * @method Voice getVoice()
 * @method VideoNote getVideoNote()
 * @method string getCaption()
 * @method Contact getContact()
 * @method Location getLocation()
 * @method Venue getVenue()
 * @method User[] getNewChatMembers()
 * @method User getLeftChatMember()
 * @method string getNewChatTitle()
 * @method PhotoSize[] getNewChatPhoto()
 * @method boolean getDeleteChatPhoto()
 * @method boolean getGroupChatCreated()
 * @method boolean getSupergroupChatCreated()
 * @method boolean getChannelChatCreated()
 * @method integer getMigrateToChatId()
 * @method integer getMigrateFromChatId()
 * @method Message getPinnedMessage()
 * @method Invoice getInvoice()
 * @method SuccessfulPayment getSuccessfulPayment()
 * @method string getConnectedWebsite()
 */
class Message extends BaseType
{
    /** @var int */
    protected $message_id;
    /** @var User */
    protected $from;
    /** @var int */
    protected $date;
    /** @var Chat */
    protected $chat;
    /** @var User */
    protected $forward_from;
    /** @var Chat */
    protected $forward_from_chat;
    /** @var int */
    protected $forward_from_message_id;
    /** @var string */
    protected $forward_signature;
    /** @var int */
    protected $forward_date;
    /** @var Message */
    protected $reply_to_message;
    /** @var int */
    protected $edit_date;
    /** @var string */
    protected $media_group_id;
    /** @var string */
    protected $author_signature;
    /** @var string */
    protected $text;
    /** @var MessageEntity[] */
    protected $entities;
    /** @var MessageEntity[] */
    protected $caption_entities;
    /** @var Audio */
    protected $audio;
    /** @var Document */
    protected $document;
    /** @var Game */
    protected $game;
    /** @var PhotoSize[] */
    protected $photo;
    /** @var Sticker */
    protected $sticker;
    /** @var Video */
    protected $video;
    /** @var Voice */
    protected $voice;
    /** @var VideoNote */
    protected $video_note;
    /** @var string */
    protected $caption;
    /** @var Contact */
    protected $contact;
    /** @var Location */
    protected $location;
    /** @var Venue */
    protected $venue;
    /** @var User[] */
    protected $new_chat_members;
    /** @var User|null */
    protected $left_chat_member;
    /** @var bool */
    protected $new_chat_title;
    /** @var bool */
    protected $new_chat_photo;
    /** @var bool */
    protected $delete_chat_photo;
    /** @var bool */
    protected $group_chat_created;
    /** @var bool */
    protected $supergroup_chat_created;
    /** @var bool */
    protected $channel_chat_created;
    /** @var int */
    protected $migrate_to_chat_id;
    /** @var int */
    protected $migrate_from_chat_id;
    /** @var Message */
    protected $pinned_message;
    /** @var Invoice */
    protected $invoice;
    /** @var SuccessfulPayment */
    protected $successful_payment;
    /** @var string */
    protected $connected_website;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->message_id = $this->getPropertyFromData('message_id', 'integer');
        $this->from = $this->getPropertyFromData('from', User::class);
        $this->date = $this->getPropertyFromData('date', 'integer');
        $this->chat = $this->getPropertyFromData('chat', Chat::class);
        $this->forward_from = $this->getPropertyFromData('forward_from', User::class);
        $this->forward_from_chat = $this->getPropertyFromData('forward_from_chat', Chat::class);
        $this->forward_from_message_id = $this->getPropertyFromData('forward_from_message_id', 'integer');
        $this->forward_signature = $this->getPropertyFromData('forward_signature', 'string');
        $this->forward_date = $this->getPropertyFromData('forward_date', 'integer');
        $this->reply_to_message = $this->getPropertyFromData('reply_to_message', Message::class);
        $this->edit_date = $this->getPropertyFromData('edit_date', 'integer');
        $this->media_group_id = $this->getPropertyFromData('media_group_id', 'string');
        $this->author_signature = $this->getPropertyFromData('author_signature', 'string');
        $this->text = $this->getPropertyFromData('text', 'string');
        $this->entities = false;
        if (isset($data['entities']) && is_array($data['entities'])) {
            $this->entities = [];
            foreach ($data['entities'] as $entity) {
                $this->entities[] = new MessageEntity($entity, $botApi);
            }
        }
        $this->caption_entities = false;
        if (isset($data['caption_entities']) && is_array($data['caption_entities'])) {
            $this->caption_entities = [];
            foreach ($data['caption_entities'] as $entity) {
                $this->caption_entities[] = new MessageEntity($entity, $botApi);
            }
        }
        $this->audio = $this->getPropertyFromData('audio', Audio::class);
        $this->document = $this->getPropertyFromData('document', Document::class);
        $this->game = $this->getPropertyFromData('game', Game::class);
        $this->photo = false;
        if (isset($data['photo']) && is_array($data['photo'])) {
            $this->photo = [];
            foreach ($data['photo'] as $photo) {
                $this->photo = new PhotoSize($photo, $botApi);
            }
        }
        $this->sticker = $this->getPropertyFromData('sticker', Sticker::class);
        $this->video = $this->getPropertyFromData('video', Video::class);
        $this->voice = $this->getPropertyFromData('voice', Voice::class);
        $this->video_note = $this->getPropertyFromData('video_note', VideoNote::class);
        $this->caption = $this->getPropertyFromData('caption', 'string');
        $this->contact = $this->getPropertyFromData('contact', Contact::class);
        $this->location = $this->getPropertyFromData('location', Location::class);
        $this->venue = $this->getPropertyFromData('venue', Venue::class);
        $this->new_chat_members = false;
        if (isset($data['new_chat_members']) && is_array($data['new_chat_members'])) {
            $this->new_chat_members = [];
            foreach ($data['new_chat_members'] as $user) {
                $this->new_chat_members[] = new User($user, $botApi);
            }
        }
        $this->left_chat_member = $this->getPropertyFromData('left_chat_member', User::class);
        $this->new_chat_title = $this->getPropertyFromData('new_chat_title', 'string');
        $this->new_chat_photo = false;
        if (isset($data['new_chat_photo']) && is_array($data['new_chat_photo'])) {
            $this->new_chat_photo = [];
            foreach ($data['new_chat_photo'] as $photo) {
                $this->new_chat_photo[] = new PhotoSize($photo, $botApi);
            }
        }
        $this->delete_chat_photo = $this->getPropertyFromData('delete_chat_photo', 'bool');
        $this->group_chat_created = $this->getPropertyFromData('group_chat_created', 'bool');
        $this->supergroup_chat_created = $this->getPropertyFromData('supergroup_chat_created', 'bool');
        $this->channel_chat_created = $this->getPropertyFromData('channel_chat_created', 'bool');
        $this->migrate_to_chat_id = $this->getPropertyFromData('migrate_to_chat_id', 'int');
        $this->migrate_from_chat_id = $this->getPropertyFromData('migrate_from_chat_id', 'int');
        $this->pinned_message = $this->getPropertyFromData('migrate_from_chat_id', Message::class);
        $this->invoice = $this->getPropertyFromData('invoice', Invoice::class);
        $this->successful_payment = $this->getPropertyFromData('successful_payment', SuccessfulPayment::class);
        $this->connected_website = $this->getPropertyFromData('connected_website', 'string');
    }

    protected $effectiveStatusUpdate = null;

    /**
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function delete()
    {
        deleteMessage::create($this->botApi)->setChatId($this->getChat()->getId())->setMessageId($this->getMessageId())->execute();
    }

    public function getEffectiveStatusUpdate()
    {
        if ($this->effectiveStatusUpdate !== null) {
            return $this->effectiveStatusUpdate;
        }
        $arr = [
            $this->getNewChatPhoto(),
            $this->getNewChatTitle(),
            $this->getNewChatMembers(),
            $this->getLeftChatMember(),
            $this->getSupergroupChatCreated(),
            $this->getGroupChatCreated(),
            $this->getChannelChatCreated(),
        ];
        foreach ($arr as $k) {
            if (false !== $k) {
                $this->effectiveStatusUpdate = $k;
                return $k;
            }
        }
        return $this->effectiveStatusUpdate = false;
    }

    public function isTextMessage()
    {
        return false !== $this->getText();
    }

    public function getType()
    {
        $keyVal = [
            'text',
            'photo',
            'video',
            'voice',
            'sticker',
            'video_note',
            'document',
            'audio',
            'contact',
            'location',
            'venue'
        ];
        foreach ($keyVal as $key) {
            if (false != $this->$key) {
                return $key;
            }
        }
        return null;
    }

    public function clone($reply = false)
    {
        $type = $this->getType();
        $params = [];
        $method = null;
        if (false != $this->getCaption()) {
            $params['caption'] = $this->getCaption();
        }
        if ($reply && false != $this->getReplyToMessage()) {
            $params['reply_to_message_id'] = $this->getReplyToMessage()->getMessageId();
        }
        switch ($type) {
            case 'text':
                $method = 'sendMessage';
                $params['text'] = $this->getText();
                break;
            case 'photo':
                $method = 'sendPhoto';
                $photo = $this->getPhoto()[sizeof($this->getPhoto()) - 1];
                $params['photo'] = $photo->getFileId();
                break;
            case 'video':
                $method = 'sendVideo';
                $params['video'] = $this->getVideo()->getFileId();
                break;
            case 'venue':
                $method = 'sendVenue';
                $params['title'] = $this->getVenue()->getTitle();
                $params['address'] = $this->getVenue()->getAddress();
                $params['foursquare_id'] = $this->getVenue()->getFoursquareId();
                $params['latitude'] = $this->getVenue()->getLocation()->getLatitude();
                $params['longitude'] = $this->getVenue()->getLocation()->getLongitude();
                break;
            case 'sticker':
                $method = 'sendSticker';
                $params['sticker'] = $this->getSticker()->getFileId();
                break;
            case 'voice':
                $method = 'sendVoice';
                $params['voice'] = $this->getVideo()->getFileId();
                break;
            case 'audio':
                $method = 'sendAudio';
                $params['audio'] = $this->getAudio()->getFileId();
                break;
            case 'contact':
                $method = 'sendContact';
                $params['phone_number'] = $this->getContact()->getPhoneNumber();
                if ($this->getContact()->getFirstName()) {
                    $params['first_name'] = $this->getContact()->getFirstName();
                }
                if ($this->getContact()->getLastName()) {
                    $params['last_name'] = $this->getContact()->getLastName();
                }
                break;
            case 'location':
                $method = 'sendLocation';
                $params['latitude'] = $this->getLocation()->getLatitude();
                $params['longitude'] = $this->getLocation()->getLongitude();
                break;
            case 'video_note':
                $method = 'sendVideoNote';
                $params['video_note'] = $this->getVideoNote()->getFileId();
                $params['duration'] = $this->getVideoNote()->getDuration();
                $params['length'] = $this->getVideoNote()->getLength();
                break;
        }
        return ['method' => $method, 'params' => $params];
    }
}
