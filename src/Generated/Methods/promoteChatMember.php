<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\promoteChatMember setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\promoteChatMember setUserId(integer $userId)
 * @method integer getUserId()
 * @method \TelegramBot\Api\Methods\promoteChatMember setUntilDate(integer $untilDate)
 * @method integer getUntilDate()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanChangeInfo(boolean $canChangeInfo)
 * @method boolean getCanChangeInfo()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanPostMessages(boolean $canPostMessages)
 * @method boolean getCanPostMessages()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanEditMessages(boolean $canEditMessages)
 * @method boolean getCanEditMessages()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanDeleteMessages(boolean $canDeleteMessages)
 * @method boolean getCanDeleteMessages()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanInviteUsers(boolean $canInviteUsers)
 * @method boolean getCanInviteUsers()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanRestrictMembers(boolean $canRestrictMembers)
 * @method boolean getCanRestrictMembers()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanPinMessages(boolean $canPinMessages)
 * @method boolean getCanPinMessages()
 * @method \TelegramBot\Api\Methods\promoteChatMember setCanPromoteMembers(boolean $canPromoteMembers)
 * @method boolean getCanPromoteMembers()
*/
class promoteChatMember extends BaseMethod
{
	static protected $requiredParams = [
		'chat_id',
		'user_id'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'user_id' => 'integer',
		'until_date' => 'integer',
		'can_change_info' => 'boolean',
		'can_post_messages' => 'boolean',
		'can_edit_messages' => 'boolean',
		'can_delete_messages' => 'boolean',
		'can_invite_users' => 'boolean',
		'can_restrict_members' => 'boolean',
		'can_pin_messages' => 'boolean',
		'can_promote_members' => 'boolean',
	];
	static protected $defaultData = [
	];
}
