<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method User getUser()
 * @method string getStatus()
 * @method integer getUntilDate()
 * @method boolean getCanBeEdited()
 * @method boolean getCanChangeInfo()
 * @method boolean getCanPostMessages()
 * @method boolean getCanEditMessages()
 * @method boolean getCanDeleteMessages()
 * @method boolean getCanInviteUsers()
 * @method boolean getCanRestrictMembers()
 * @method boolean getCanPinMessages()
 * @method boolean getCanPromoteMembers()
 * @method boolean getCanSendMessages()
 * @method boolean getCanSendMediaMessages()
 * @method boolean getCanSendOtherMessages()
 * @method boolean getCanAddWebPagePreviews()
 */
class ChatMember extends BaseType
{
    const CREATOR = 'creator';
    const ADMINISTRATOR = 'administrator';
    const MEMBER = 'member';
    const RESTRICTED = 'restricted';
    const LEFT = 'left';
    const KICKED = 'kicked';

    protected $user;
    protected $status;
    protected $until_date;
    protected $can_be_edited;
    protected $can_change_info;
    protected $can_post_messages;
    protected $can_edit_messages;
    protected $can_delete_messages;
    protected $can_invite_users;
    protected $can_restrict_members;
    protected $can_pin_messages;
    protected $can_promote_members;
    protected $can_send_messages;
    protected $can_send_media_messages;
    protected $can_send_other_messages;
    protected $can_add_web_page_previews;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->user = $this->getPropertyFromData('user', User::class);
        $this->status = $this->getPropertyFromData('status', 'string');
        $this->until_date = $this->getPropertyFromData('until_date', 'int');
        $this->can_be_edited = $this->getPropertyFromData('can_be_edited', 'bool');
        $this->can_change_info = $this->getPropertyFromData('can_change_info', 'bool');
        $this->can_post_messages = $this->getPropertyFromData('can_post_messages', 'bool');
        $this->can_delete_messages = $this->getPropertyFromData('can_delete_messages', 'bool');
        $this->can_edit_messages = $this->getPropertyFromData('can_edit_messages', 'bool');
        $this->can_invite_users = $this->getPropertyFromData('can_invite_users', 'bool');
        $this->can_restrict_members = $this->getPropertyFromData('can_restrict_members', 'bool');
        $this->can_pin_messages = $this->getPropertyFromData('can_pin_messages', 'bool');
        $this->can_promote_members = $this->getPropertyFromData('can_promote_members', 'bool');
        $this->can_send_messages = $this->getPropertyFromData('can_send_messages', 'bool');
        $this->can_send_media_messages = $this->getPropertyFromData('can_send_media_messages', 'bool');
        $this->can_send_other_messages = $this->getPropertyFromData('can_send_other_messages', 'bool');
        $this->can_add_web_page_previews = $this->getPropertyFromData('can_add_web_page_previews', 'bool');
    }
}
