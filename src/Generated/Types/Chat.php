<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Chat setId(integer $id)
 * @method integer getId()
 * @method \TelegramBot\Api\Types\Chat setType(string $type)
 * @method string getType()
 * @method \TelegramBot\Api\Types\Chat setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\Chat setUsername(string $username)
 * @method string getUsername()
 * @method \TelegramBot\Api\Types\Chat setFirstName(string $firstName)
 * @method string getFirstName()
 * @method \TelegramBot\Api\Types\Chat setLastName(string $lastName)
 * @method string getLastName()
 * @method \TelegramBot\Api\Types\Chat setAllMembersAreAdministrators(boolean $allMembersAreAdministrators)
 * @method boolean getAllMembersAreAdministrators()
 * @method \TelegramBot\Api\Types\Chat setPhoto(\TelegramBot\Api\Types\ChatPhoto $photo)
 * @method \TelegramBot\Api\Types\ChatPhoto getPhoto()
 * @method \TelegramBot\Api\Types\Chat setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\Chat setInviteLink(string $inviteLink)
 * @method string getInviteLink()
 * @method \TelegramBot\Api\Types\Chat setPinnedMessage(\TelegramBot\Api\Types\Message $pinnedMessage)
 * @method \TelegramBot\Api\Types\Message getPinnedMessage()
 * @method \TelegramBot\Api\Types\Chat setStickerSetName(string $stickerSetName)
 * @method string getStickerSetName()
 * @method \TelegramBot\Api\Types\Chat setCanSetStickerSet(boolean $canSetStickerSet)
 * @method boolean getCanSetStickerSet()
*/
class Chat extends BaseType implements TypeInterface
{
public static $name = 'Chat';
	const TYPE_PRIVATE = 'private';
	const TYPE_GROUP = 'group';
	const TYPE_SUPER_GROUP = 'supergroup';
	const TYPE_CHANNEL = 'channel';
	static protected $requiredParams = [
		'id'
	];
	static protected $map = [
		'id' => 'integer',
		'type' => 'string',
		'title' => 'string',
		'username' => 'string',
		'first_name' => 'string',
		'last_name' => 'string',
		'all_members_are_administrators' => 'boolean',
		'photo' => \TelegramBot\Api\Types\ChatPhoto::class,
		'description' => 'string',
		'invite_link' => 'string',
		'pinned_message' => \TelegramBot\Api\Types\Message::class,
		'sticker_set_name' => 'string',
		'can_set_sticker_set' => 'boolean',
	];
	static protected $defaultData = [
	];
}
