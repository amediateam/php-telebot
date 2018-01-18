<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\ChatMember setUser(\TelegramBot\Api\Types\User $user)
 * @method \TelegramBot\Api\Types\User getUser()
 * @method \TelegramBot\Api\Types\ChatMember setStatus(string $status)
 * @method string getStatus()
 * @method \TelegramBot\Api\Types\ChatMember setUntilDate(integer $untilDate)
 * @method integer getUntilDate()
 * @method \TelegramBot\Api\Types\ChatMember setCanBeEdited(boolean $canBeEdited)
 * @method boolean getCanBeEdited()
 * @method \TelegramBot\Api\Types\ChatMember setCanChangeInfo(boolean $canChangeInfo)
 * @method boolean getCanChangeInfo()
 * @method \TelegramBot\Api\Types\ChatMember setCanPostMessages(boolean $canPostMessages)
 * @method boolean getCanPostMessages()
 * @method \TelegramBot\Api\Types\ChatMember setCanEditMessages(boolean $canEditMessages)
 * @method boolean getCanEditMessages()
 * @method \TelegramBot\Api\Types\ChatMember setCanDeleteMessages(boolean $canDeleteMessages)
 * @method boolean getCanDeleteMessages()
 * @method \TelegramBot\Api\Types\ChatMember setCanInviteUsers(boolean $canInviteUsers)
 * @method boolean getCanInviteUsers()
 * @method \TelegramBot\Api\Types\ChatMember setCanRestrictMembers(boolean $canRestrictMembers)
 * @method boolean getCanRestrictMembers()
 * @method \TelegramBot\Api\Types\ChatMember setCanPinMessages(boolean $canPinMessages)
 * @method boolean getCanPinMessages()
 * @method \TelegramBot\Api\Types\ChatMember setCanPromoteMembers(boolean $canPromoteMembers)
 * @method boolean getCanPromoteMembers()
 * @method \TelegramBot\Api\Types\ChatMember setCanSendMessages(boolean $canSendMessages)
 * @method boolean getCanSendMessages()
 * @method \TelegramBot\Api\Types\ChatMember setCanSendMediaMessages(boolean $canSendMediaMessages)
 * @method boolean getCanSendMediaMessages()
 * @method \TelegramBot\Api\Types\ChatMember setCanSendOtherMessages(boolean $canSendOtherMessages)
 * @method boolean getCanSendOtherMessages()
 * @method \TelegramBot\Api\Types\ChatMember setCanAddWebPagePreviews(boolean $canAddWebPagePreviews)
 * @method boolean getCanAddWebPagePreviews()
*/
class ChatMember extends BaseType implements TypeInterface
{
public static $name = 'ChatMember';
	const CREATOR = 'creator';
	const ADMINISTRATOR = 'administrator';
	const MEMBER = 'member';
	const RESTRICTED = 'restricted';
	const LEFT = 'left';
	const KICKED = 'kicked';
	static protected $requiredParams = [
		'user',
		'status'
	];
	static protected $map = [
		'user' => \TelegramBot\Api\Types\User::class,
		'status' => 'string',
		'until_date' => 'integer',
		'can_be_edited' => 'boolean',
		'can_change_info' => 'boolean',
		'can_post_messages' => 'boolean',
		'can_edit_messages' => 'boolean',
		'can_delete_messages' => 'boolean',
		'can_invite_users' => 'boolean',
		'can_restrict_members' => 'boolean',
		'can_pin_messages' => 'boolean',
		'can_promote_members' => 'boolean',
		'can_send_messages' => 'boolean',
		'can_send_media_messages' => 'boolean',
		'can_send_other_messages' => 'boolean',
		'can_add_web_page_previews' => 'boolean',
	];
	static protected $defaultData = [
	];
}
