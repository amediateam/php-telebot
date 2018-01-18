<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\restrictChatMember setChatId(integer $chatId)
 * @method integer getChatId()
 * @method \TelegramBot\Api\Methods\restrictChatMember setUserId(integer $userId)
 * @method integer getUserId()
 * @method \TelegramBot\Api\Methods\restrictChatMember setUntilDate(integer $untilDate)
 * @method integer getUntilDate()
 * @method \TelegramBot\Api\Methods\restrictChatMember setCanSendMessages(boolean $canSendMessages)
 * @method boolean getCanSendMessages()
 * @method \TelegramBot\Api\Methods\restrictChatMember setCanSendMediaMessages(boolean $canSendMediaMessages)
 * @method boolean getCanSendMediaMessages()
 * @method \TelegramBot\Api\Methods\restrictChatMember setCanSendOtherMessages(boolean $canSendOtherMessages)
 * @method boolean getCanSendOtherMessages()
 * @method \TelegramBot\Api\Methods\restrictChatMember setCanAddWebPagePreviews(boolean $canAddWebPagePreviews)
 * @method boolean getCanAddWebPagePreviews()
*/
class restrictChatMember extends BaseMethod
{
	public static $method = 'restrictChatMember';
	static protected $requiredParams = [
		'chat_id',
		'user_id'
	];
	static protected $map = [
		'chat_id' => 'integer',
		'user_id' => 'integer',
		'until_date' => 'integer',
		'can_send_messages' => 'boolean',
		'can_send_media_messages' => 'boolean',
		'can_send_other_messages' => 'boolean',
		'can_add_web_page_previews' => 'boolean',
	];
	static protected $defaultData = [
	];
}
