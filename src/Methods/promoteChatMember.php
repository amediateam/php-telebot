<?php
namespace TelegramBot\Api\Methods;

/**
 * @method promoteChatMember setChatId(integer $chatId)
 * @method promoteChatMember setUserId(integer $userId)
 * @method promoteChatMember setUntilDate(integer $untilDate)
 * @method promoteChatMember setCanChangeInfo(boolean $canChangeInfo)
 * @method promoteChatMember setCanPostMessages(boolean $canPostMessages)
 * @method promoteChatMember setCanEditMessages(boolean $canEditMessages)
 * @method promoteChatMember setCanDeleteMessages(boolean $canDeleteMessages)
 * @method promoteChatMember setCanInviteUsers(boolean $canInviteUsers)
 * @method promoteChatMember setCanRestrictMembers(boolean $canRestrictMembers)
 * @method promoteChatMember setCanPinMessages(boolean $canPinMessages)
 * @method promoteChatMember setCanPromoteMembers(boolean $canPromoteMembers)
 */
class promoteChatMember extends BaseMethod
{
    protected $map = [
        'chat_id',
        'user_id',
        'until_date',
        'can_change_info',
        'can_post_messages',
        'can_edit_messages',
        'can_delete_messages',
        'can_invite_users',
        'can_restrict_members',
        'can_pin_messages',
        'can_promote_members',
    ];

    public function toResult()
    {
        return true;
    }
}
