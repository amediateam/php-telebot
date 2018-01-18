<?php
namespace TelegramBot\Api;
class MethodFunctions{
	protected $methodMap = [
		'getUpdates' => [
			'returnType' => [
				\TelegramBot\Api\Iterators\ArrayOfUpdate::class,
			],
			'paramsMap' => [
				'offset',
				'limit',
				'timeout',
				'allowed_updates',
			],
		],
		'getUpdatesAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'offset',
				'limit',
				'timeout',
				'allowed_updates',
			],
		],
		'setWebhook' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'url',
				'certificate',
				'max_connections',
				'allowed_updates',
			],
		],
		'setWebhookAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'url',
				'certificate',
				'max_connections',
				'allowed_updates',
			],
		],
		'deleteWebhook' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
			],
		],
		'deleteWebhookAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
			],
		],
		'getWebhookInfo' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
			],
		],
		'getWebhookInfoAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
			],
		],
		'getMe' => [
			'returnType' => [
				\TelegramBot\Api\Types\User::class,
			],
			'paramsMap' => [
			],
		],
		'getMeAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
			],
		],
		'sendMessage' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'text',
				'parse_mode',
				'disable_web_page_preview',
				'disable_notification',
				'reply_markup',
				'reply_to_message_id',
			],
		],
		'sendMessageAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'text',
				'parse_mode',
				'disable_web_page_preview',
				'disable_notification',
				'reply_markup',
				'reply_to_message_id',
			],
		],
		'forwardMessage' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'from_chat_id',
				'disable_notification',
				'message_id',
			],
		],
		'forwardMessageAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'from_chat_id',
				'disable_notification',
				'message_id',
			],
		],
		'sendPhoto' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'photo',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendPhotoAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'photo',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendAudio' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'audio',
				'duration',
				'performer',
				'title',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendAudioAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'audio',
				'duration',
				'performer',
				'title',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendDocument' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'document',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendDocumentAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'document',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendVideo' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'video',
				'duration',
				'width',
				'height',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendVideoAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'video',
				'duration',
				'width',
				'height',
				'caption',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendVoice' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'voice',
				'caption',
				'duration',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendVoiceAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'voice',
				'caption',
				'duration',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendVideoNote' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'video_note',
				'duration',
				'length',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendVideoNoteAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'video_note',
				'duration',
				'length',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendMediaGroup' => [
			'returnType' => [
				\TelegramBot\Api\Iterators\ArrayOfMessage::class,
			],
			'paramsMap' => [
				'chat_id',
				'media',
				'duration',
				'length',
				'disable_notification',
				'reply_to_message_id',
			],
		],
		'sendMediaGroupAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'media',
				'duration',
				'length',
				'disable_notification',
				'reply_to_message_id',
			],
		],
		'sendLocation' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'latitude',
				'longitude',
				'live_period',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendLocationAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'latitude',
				'longitude',
				'live_period',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'editMessageLiveLocation' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'latitude',
				'longitude',
				'reply_markup',
			],
		],
		'editMessageLiveLocationAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'latitude',
				'longitude',
				'reply_markup',
			],
		],
		'stopMessageLiveLocation' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'reply_markup',
			],
		],
		'stopMessageLiveLocationAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'reply_markup',
			],
		],
		'sendVenue' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'latitude',
				'longitude',
				'title',
				'address',
				'foursquare_id',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendVenueAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'latitude',
				'longitude',
				'title',
				'address',
				'foursquare_id',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendContact' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'phone_number',
				'first_name',
				'last_name',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendContactAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'phone_number',
				'first_name',
				'last_name',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendChatAction' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'action',
			],
		],
		'sendChatActionAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'action',
			],
		],
		'getUserProfilePhotos' => [
			'returnType' => [
				\TelegramBot\Api\Types\UserProfilePhotos::class,
			],
			'paramsMap' => [
				'user_id',
				'offset',
				'limit',
			],
		],
		'getUserProfilePhotosAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'user_id',
				'offset',
				'limit',
			],
		],
		'getFile' => [
			'returnType' => [
				\TelegramBot\Api\Types\File::class,
			],
			'paramsMap' => [
				'file_id',
			],
		],
		'getFileAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'file_id',
			],
		],
		'kickChatMember' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
				'until_date',
			],
		],
		'kickChatMemberAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
				'until_date',
			],
		],
		'unbanChatMember' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
			],
		],
		'unbanChatMemberAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
			],
		],
		'restrictChatMember' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
				'until_date',
				'can_send_messages',
				'can_send_media_messages',
				'can_send_other_messages',
				'can_add_web_page_previews',
			],
		],
		'restrictChatMemberAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
				'until_date',
				'can_send_messages',
				'can_send_media_messages',
				'can_send_other_messages',
				'can_add_web_page_previews',
			],
		],
		'promoteChatMember' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
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
			],
		],
		'promoteChatMemberAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
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
			],
		],
		'exportChatInviteLink' => [
			'returnType' => [
				'string',
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'exportChatInviteLinkAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'setChatPhoto' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'photo',
			],
		],
		'setChatPhotoAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'photo',
			],
		],
		'deleteChatPhoto' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'deleteChatPhotoAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'setChatTitle' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'title',
			],
		],
		'setChatTitleAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'title',
			],
		],
		'setChatDescription' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'description',
			],
		],
		'setChatDescriptionAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'description',
			],
		],
		'pinChatMessage' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'disable_notification',
			],
		],
		'pinChatMessageAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'disable_notification',
			],
		],
		'unpinChatMessage' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'unpinChatMessageAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'leaveChat' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'leaveChatAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'getChat' => [
			'returnType' => [
				\TelegramBot\Api\Types\Chat::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'getChatAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'getChatAdministrators' => [
			'returnType' => [
				\TelegramBot\Api\Iterators\ArrayOfChatMember::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'getChatAdministratorsAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'getChatMembersCount' => [
			'returnType' => [
				'integer',
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'getChatMembersCountAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'getChatMember' => [
			'returnType' => [
				\TelegramBot\Api\Types\ChatMember::class,
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
			],
		],
		'getChatMemberAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'user_id',
			],
		],
		'setChatStickerSet' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'sticker_set_name',
			],
		],
		'setChatStickerSetAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'sticker_set_name',
			],
		],
		'deleteChatStickerSet' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'deleteChatStickerSetAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
			],
		],
		'answerCallbackQuery' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'callback_query_id',
				'text',
				'show_alert',
				'url',
				'cache_time',
			],
		],
		'answerCallbackQueryAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'callback_query_id',
				'text',
				'show_alert',
				'url',
				'cache_time',
			],
		],
		'editMessageText' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'text',
				'parse_mode',
				'disable_web_page_preview',
				'reply_markup',
			],
		],
		'editMessageTextAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'text',
				'parse_mode',
				'disable_web_page_preview',
				'reply_markup',
			],
		],
		'editMessageCaption' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'caption',
				'reply_markup',
			],
		],
		'editMessageCaptionAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'caption',
				'reply_markup',
			],
		],
		'editMessageReplyMarkup' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'reply_markup',
			],
		],
		'editMessageReplyMarkupAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
				'inline_message_id',
				'reply_markup',
			],
		],
		'deleteMessage' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
			],
		],
		'deleteMessageAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'message_id',
			],
		],
		'sendSticker' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'sticker',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendStickerAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'sticker',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'getStickerSet' => [
			'returnType' => [
				\TelegramBot\Api\Types\StickerSet::class,
			],
			'paramsMap' => [
				'name',
			],
		],
		'getStickerSetAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'name',
			],
		],
		'uploadStickerFile' => [
			'returnType' => [
				\TelegramBot\Api\Types\File::class,
			],
			'paramsMap' => [
				'user_id',
				'png_sticker',
			],
		],
		'uploadStickerFileAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'user_id',
				'png_sticker',
			],
		],
		'createNewStickerSet' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'user_id',
				'name',
				'png_sticker',
				'emojis',
				'contains_masks',
				'mask_position',
			],
		],
		'createNewStickerSetAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'user_id',
				'name',
				'png_sticker',
				'emojis',
				'contains_masks',
				'mask_position',
			],
		],
		'addStickerToSet' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'user_id',
				'name',
				'png_sticker',
				'emojis',
				'mask_position',
			],
		],
		'addStickerToSetAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'user_id',
				'name',
				'png_sticker',
				'emojis',
				'mask_position',
			],
		],
		'setStickerPositionInSet' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'sticker',
				'position',
			],
		],
		'setStickerPositionInSetAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'sticker',
				'position',
			],
		],
		'deleteStickerFromSet' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'sticker',
			],
		],
		'deleteStickerFromSetAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'sticker',
			],
		],
		'answerInlineQuery' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'inline_query_id',
				'results',
				'cache_time',
				'is_personal',
				'next_offset',
				'switch_pm_text',
				'switch_pm_parameter',
			],
		],
		'answerInlineQueryAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'inline_query_id',
				'results',
				'cache_time',
				'is_personal',
				'next_offset',
				'switch_pm_text',
				'switch_pm_parameter',
			],
		],
		'sendInvoice' => [
			'returnType' => [
				\TelegramBot\Api\Types\Message::class,
			],
			'paramsMap' => [
				'chat_id',
				'title',
				'description',
				'payload',
				'provider_token',
				'start_parameter',
				'currency',
				'prices',
				'provider_data',
				'photo_url',
				'photo_size',
				'photo_width',
				'photo_height',
				'need_name',
				'need_phone_number',
				'need_email',
				'need_shipping_address',
				'is_flexible',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'sendInvoiceAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'chat_id',
				'title',
				'description',
				'payload',
				'provider_token',
				'start_parameter',
				'currency',
				'prices',
				'provider_data',
				'photo_url',
				'photo_size',
				'photo_width',
				'photo_height',
				'need_name',
				'need_phone_number',
				'need_email',
				'need_shipping_address',
				'is_flexible',
				'disable_notification',
				'reply_to_message_id',
				'reply_markup',
			],
		],
		'answerShippingQuery' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'shipping_query_id',
				'ok',
				'shipping_options',
				'error_message',
			],
		],
		'answerShippingQueryAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'shipping_query_id',
				'ok',
				'shipping_options',
				'error_message',
			],
		],
		'answerPreCheckoutQuery' => [
			'returnType' => [
				'boolean',
			],
			'paramsMap' => [
				'pre_checkout_query_id',
				'ok',
				'error_message',
			],
		],
		'answerPreCheckoutQueryAsync' => [
			'returnType' => [
				\GuzzleHttp\Promise\PromiseInterface::class,
			],
			'paramsMap' => [
				'pre_checkout_query_id',
				'ok',
				'error_message',
			],
		],
	];
	protected $typeMap = [
		'createReplyKeyboardMarkup' => [
			'returnType' => [
				\TelegramBot\Api\Types\ReplyKeyboardMarkup::class,
			],
			'paramsMap' => [
				'keyboard',
				'resize_keyboard',
				'one_time_keyboard',
				'selective',
			],
		],
		'createKeyboardButton' => [
			'returnType' => [
				\TelegramBot\Api\Types\KeyboardButton::class,
			],
			'paramsMap' => [
				'text',
				'request_contact',
				'request_location',
			],
		],
		'createReplyKeyboardRemove' => [
			'returnType' => [
				\TelegramBot\Api\Types\ReplyKeyboardRemove::class,
			],
			'paramsMap' => [
				'remove_keyboard',
				'selective',
			],
		],
		'createInlineKeyboardMarkup' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineKeyboardMarkup::class,
			],
			'paramsMap' => [
				'inline_keyboard',
			],
		],
		'createInlineKeyboardButton' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineKeyboardButton::class,
			],
			'paramsMap' => [
				'text',
				'url',
				'callback_data',
				'switch_inline_query',
				'switch_inline_query_current_chat',
				'callback_game',
				'pay',
			],
		],
		'createForceReply' => [
			'returnType' => [
				\TelegramBot\Api\Types\ForceReply::class,
			],
			'paramsMap' => [
				'force_reply',
				'selective',
			],
		],
		'createInlineQueryResultArticle' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultArticle::class,
			],
			'paramsMap' => [
				'id',
				'title',
				'input_message_content',
				'reply_markup',
				'url',
				'hide_url',
				'description',
				'thumb_url',
				'thumb_width',
				'thumb_height',
				'type',
			],
		],
		'createInlineQueryResultAudio' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultAudio::class,
			],
			'paramsMap' => [
				'id',
				'audio_url',
				'title',
				'caption',
				'performer',
				'audio_duration',
				'input_message_content',
				'reply_markup',
				'type',
			],
		],
		'createInlineQueryResultContact' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultContact::class,
			],
			'paramsMap' => [
				'id',
				'phone_number',
				'first_name',
				'last_name',
				'thumb_url',
				'thumb_width',
				'thumb_height',
				'input_message_content',
				'reply_markup',
				'type',
			],
		],
		'createInlineQueryResultGame' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultGame::class,
			],
			'paramsMap' => [
				'id',
				'title',
				'caption',
				'document_url',
				'mime_type',
				'description',
				'input_message_content',
				'reply_markup',
				'type',
			],
		],
		'createInlineQueryResultDocument' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultDocument::class,
			],
			'paramsMap' => [
				'id',
				'title',
				'caption',
				'document_url',
				'mime_type',
				'description',
				'reply_markup',
				'input_message_content',
				'thumb_url',
				'thumb_width',
				'thumb_height',
				'type',
			],
		],
		'createInlineQueryResultGif' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultGif::class,
			],
			'paramsMap' => [
				'id',
				'gif_url',
				'gif_width',
				'gif_height',
				'gif_duration',
				'thumb_url',
				'title',
				'caption',
				'input_message_content',
				'reply_markup',
				'type',
			],
		],
		'createInlineQueryResultLocation' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultLocation::class,
			],
			'paramsMap' => [
				'id',
				'latitude',
				'longitude',
				'title',
				'live_period',
				'thumb_url',
				'input_message_content',
				'reply_markup',
				'thumb_width',
				'thumb_height',
				'type',
			],
		],
		'createInlineQueryResultMpeg4Gif' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultMpeg4Gif::class,
			],
			'paramsMap' => [
				'id',
				'mpeg4_url',
				'mpeg4_width',
				'mpeg4_height',
				'mpeg4_duration',
				'thumb_url',
				'title',
				'caption',
				'reply_markup',
				'input_message_content',
				'type',
			],
		],
		'createInlineQueryResultPhoto' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultPhoto::class,
			],
			'paramsMap' => [
				'id',
				'photo_url',
				'thumb_url',
				'photo_width',
				'photo_height',
				'title',
				'caption',
				'reply_markup',
				'input_message_content',
				'type',
			],
		],
		'createInlineQueryResultVenue' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultVenue::class,
			],
			'paramsMap' => [
				'id',
				'latitude',
				'longitude',
				'title',
				'address',
				'input_message_content',
				'reply_markup',
				'thumb_url',
				'thumb_width',
				'thumb_height',
				'type',
			],
		],
		'createInlineQueryResultVideo' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultVideo::class,
			],
			'paramsMap' => [
				'id',
				'video_url',
				'mime_type',
				'thumb_url',
				'title',
				'caption',
				'video_width',
				'video_height',
				'video_duration',
				'description',
				'input_message_content',
				'reply_markup',
				'type',
			],
		],
		'createInlineQueryResultVoice' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultVoice::class,
			],
			'paramsMap' => [
				'id',
				'voice_url',
				'title',
				'caption',
				'voice_duration',
				'input_message_content',
				'reply_markup',
				'type',
			],
		],
		'createInputTextMessageContent' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputTextMessageContent::class,
			],
			'paramsMap' => [
				'message_text',
				'parse_mode',
				'disable_web_page_preview',
			],
		],
		'createInputLocationMessageContent' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputLocationMessageContent::class,
			],
			'paramsMap' => [
				'latitude',
				'longitude',
				'live_period',
			],
		],
		'createInputVenueMessageContent' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputVenueMessageContent::class,
			],
			'paramsMap' => [
				'latitude',
				'longitude',
				'title',
				'address',
				'foursquare_id',
			],
		],
		'createInputContactMessageContent' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputContactMessageContent::class,
			],
			'paramsMap' => [
				'phone_number',
				'first_name',
				'last_name',
			],
		],
		'createInputMediaPhoto' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputMediaPhoto::class,
			],
			'paramsMap' => [
				'type',
				'media',
				'caption',
			],
		],
		'createInputMediaVideo' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputMediaVideo::class,
			],
			'paramsMap' => [
				'type',
				'media',
				'caption',
				'width',
				'height',
				'duration',
			],
		],
	];
		/**
		 * @param $keyboard array
		 * @param $resizeKeyboard boolean
		 * @param $oneTimeKeyboard boolean
		 * @param $selective boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\ReplyKeyboardMarkup
		*/
		public function createReplyKeyboardMarkup(
			$keyboard,
			$resizeKeyboard = false,
			$oneTimeKeyboard = false,
			$selective = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('createReplyKeyboardMarkup', func_get_args());
			}
		}
		/**
		 * @param $text string
		 * @param $requestContact boolean
		 * @param $requestLocation boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\KeyboardButton
		*/
		public function createKeyboardButton(
			$text,
			$requestContact = false,
			$requestLocation = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('createKeyboardButton', func_get_args());
			}
		}
		/**
		 * @param $removeKeyboard boolean
		 * @param $selective boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\ReplyKeyboardRemove
		*/
		public function createReplyKeyboardRemove(
			$removeKeyboard,
			$selective = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('createReplyKeyboardRemove', func_get_args());
			}
		}
		/**
		 * @param $inlineKeyboard array
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineKeyboardMarkup
		*/
		public function createInlineKeyboardMarkup(
			$inlineKeyboard
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineKeyboardMarkup', func_get_args());
			}
		}
		/**
		 * @param $text string
		 * @param $url string
		 * @param $callbackData string
		 * @param $switchInlineQuery string
		 * @param $switchInlineQueryCurrentChat string
		 * @param $callbackGame \TelegramBot\Api\Types\CallbackGame
		 * @param $pay boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineKeyboardButton
		*/
		public function createInlineKeyboardButton(
			$text,
			$url = null,
			$callbackData = null,
			$switchInlineQuery = null,
			$switchInlineQueryCurrentChat = null,
			$callbackGame = null,
			$pay = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineKeyboardButton', func_get_args());
			}
		}
		/**
		 * @param $forceReply boolean
		 * @param $selective boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\ForceReply
		*/
		public function createForceReply(
			$forceReply,
			$selective = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('createForceReply', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $title string
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $url string
		 * @param $hideUrl boolean
		 * @param $description string
		 * @param $thumbUrl string
		 * @param $thumbWidth integer
		 * @param $thumbHeight integer
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultArticle
		*/
		public function createInlineQueryResultArticle(
			$id,
			$title,
			$inputMessageContent,
			$replyMarkup = null,
			$url = null,
			$hideUrl = false,
			$description = null,
			$thumbUrl = null,
			$thumbWidth = null,
			$thumbHeight = null,
			$type = 'article'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultArticle', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $title string
		 * @param $audioUrl string
		 * @param $caption string
		 * @param $performer string
		 * @param $audioDuration integer
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultAudio
		*/
		public function createInlineQueryResultAudio(
			$id,
			$title,
			$audioUrl,
			$caption = null,
			$performer = null,
			$audioDuration = null,
			$inputMessageContent = null,
			$replyMarkup = null,
			$type = 'audio'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultAudio', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $phoneNumber string
		 * @param $firstName string
		 * @param $lastName string
		 * @param $thumbUrl string
		 * @param $thumbWidth integer
		 * @param $thumbHeight integer
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultContact
		*/
		public function createInlineQueryResultContact(
			$id,
			$phoneNumber,
			$firstName,
			$lastName = null,
			$thumbUrl = null,
			$thumbWidth = null,
			$thumbHeight = null,
			$inputMessageContent = null,
			$replyMarkup = null,
			$type = 'contact'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultContact', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $documentUrl string
		 * @param $title string
		 * @param $caption string
		 * @param $mimeType string
		 * @param $description string
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultGame
		*/
		public function createInlineQueryResultGame(
			$id,
			$documentUrl,
			$title,
			$caption = null,
			$mimeType = null,
			$description = null,
			$inputMessageContent = null,
			$replyMarkup = null,
			$type = 'game'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultGame', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $title string
		 * @param $mimeType string
		 * @param $documentUrl string
		 * @param $caption string
		 * @param $description string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $inputMessageContent InputMessageContent
		 * @param $thumbUrl string
		 * @param $thumbWidth integer
		 * @param $thumbHeight integer
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultDocument
		*/
		public function createInlineQueryResultDocument(
			$id,
			$title,
			$mimeType,
			$documentUrl,
			$caption = null,
			$description = null,
			$replyMarkup = null,
			$inputMessageContent,
			$thumbUrl = null,
			$thumbWidth = null,
			$thumbHeight = null,
			$type = 'document'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultDocument', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $gifUrl string
		 * @param $gifWidth integer
		 * @param $gifHeight integer
		 * @param $gifDuration integer
		 * @param $thumbUrl string
		 * @param $title string
		 * @param $caption string
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultGif
		*/
		public function createInlineQueryResultGif(
			$id,
			$gifUrl,
			$gifWidth = null,
			$gifHeight = null,
			$gifDuration = null,
			$thumbUrl = null,
			$title = null,
			$caption = null,
			$inputMessageContent = null,
			$replyMarkup = null,
			$type = 'gif'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultGif', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $latitude float
		 * @param $longitude float
		 * @param $title string
		 * @param $livePeriod integer
		 * @param $thumbUrl string
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $thumbWidth integer
		 * @param $thumbHeight integer
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultLocation
		*/
		public function createInlineQueryResultLocation(
			$id,
			$latitude,
			$longitude,
			$title,
			$livePeriod = null,
			$thumbUrl = null,
			$inputMessageContent = null,
			$replyMarkup = null,
			$thumbWidth = null,
			$thumbHeight = null,
			$type = 'location'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultLocation', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $mpeg4Url string
		 * @param $mpeg4Width integer
		 * @param $mpeg4Height integer
		 * @param $mpeg4Duration integer
		 * @param $thumbUrl string
		 * @param $title string
		 * @param $caption string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif
		*/
		public function createInlineQueryResultMpeg4Gif(
			$id,
			$mpeg4Url,
			$mpeg4Width = null,
			$mpeg4Height = null,
			$mpeg4Duration = null,
			$thumbUrl = null,
			$title = null,
			$caption = null,
			$replyMarkup = null,
			$inputMessageContent = null,
			$type = 'mpeg4_gif'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultMpeg4Gif', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $photoUrl string
		 * @param $thumbUrl string
		 * @param $photoWidth integer
		 * @param $photoHeight integer
		 * @param $title string
		 * @param $caption string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultPhoto
		*/
		public function createInlineQueryResultPhoto(
			$id,
			$photoUrl,
			$thumbUrl = null,
			$photoWidth = null,
			$photoHeight = null,
			$title = null,
			$caption = null,
			$replyMarkup = null,
			$inputMessageContent = null,
			$type = 'photo'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultPhoto', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $latitude float
		 * @param $longitude float
		 * @param $title string
		 * @param $address integer
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $thumbUrl string
		 * @param $thumbWidth integer
		 * @param $thumbHeight integer
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultVenue
		*/
		public function createInlineQueryResultVenue(
			$id,
			$latitude,
			$longitude,
			$title,
			$address,
			$inputMessageContent = null,
			$replyMarkup = null,
			$thumbUrl = null,
			$thumbWidth = null,
			$thumbHeight = null,
			$type = 'venue'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultVenue', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $videoUrl string
		 * @param $mimeType string
		 * @param $thumbUrl string
		 * @param $title string
		 * @param $caption string
		 * @param $videoWidth integer
		 * @param $videoHeight integer
		 * @param $videoDuration integer
		 * @param $description string
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultVideo
		*/
		public function createInlineQueryResultVideo(
			$id,
			$videoUrl,
			$mimeType,
			$thumbUrl = null,
			$title = null,
			$caption = null,
			$videoWidth = null,
			$videoHeight = null,
			$videoDuration = null,
			$description = null,
			$inputMessageContent = null,
			$replyMarkup = null,
			$type = 'video'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultVideo', func_get_args());
			}
		}
		/**
		 * @param $id string
		 * @param $voiceUrl string
		 * @param $title string
		 * @param $caption string
		 * @param $voiceDuration integer
		 * @param $inputMessageContent \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @param $type string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InlineQueryResultVoice
		*/
		public function createInlineQueryResultVoice(
			$id,
			$voiceUrl,
			$title,
			$caption = null,
			$voiceDuration = null,
			$inputMessageContent = null,
			$replyMarkup = null,
			$type = 'voice'
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInlineQueryResultVoice', func_get_args());
			}
		}
		/**
		 * @param $messageText string
		 * @param $parseMode string
		 * @param $disableWebPagePreview boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InputTextMessageContent
		*/
		public function createInputTextMessageContent(
			$messageText,
			$parseMode = null,
			$disableWebPagePreview = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInputTextMessageContent', func_get_args());
			}
		}
		/**
		 * @param $latitude float
		 * @param $longitude float
		 * @param $livePeriod integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InputLocationMessageContent
		*/
		public function createInputLocationMessageContent(
			$latitude,
			$longitude,
			$livePeriod = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInputLocationMessageContent', func_get_args());
			}
		}
		/**
		 * @param $latitude float
		 * @param $longitude float
		 * @param $title string
		 * @param $address string
		 * @param $foursquareId string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InputVenueMessageContent
		*/
		public function createInputVenueMessageContent(
			$latitude,
			$longitude,
			$title,
			$address,
			$foursquareId = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInputVenueMessageContent', func_get_args());
			}
		}
		/**
		 * @param $phoneNumber string
		 * @param $firstName string
		 * @param $lastName string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InputContactMessageContent
		*/
		public function createInputContactMessageContent(
			$phoneNumber,
			$firstName,
			$lastName = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInputContactMessageContent', func_get_args());
			}
		}
		/**
		 * @param $type string
		 * @param $media string
		 * @param $caption string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InputMediaPhoto
		*/
		public function createInputMediaPhoto(
			$type,
			$media,
			$caption = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInputMediaPhoto', func_get_args());
			}
		}
		/**
		 * @param $type string
		 * @param $media string
		 * @param $caption string
		 * @param $width integer
		 * @param $height integer
		 * @param $duration integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\InputMediaVideo
		*/
		public function createInputMediaVideo(
			$type,
			$media,
			$caption = null,
			$width = null,
			$height = null,
			$duration = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('createInputMediaVideo', func_get_args());
			}
		}
		/**
		 * @param $offset integer
		 * @param $limit integer
		 * @param $timeout integer
		 * @param $allowedUpdates array
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Iterators\ArrayOfUpdate
		*/
		public function getUpdates(
			$offset = null,
			$limit = null,
			$timeout = null,
			$allowedUpdates = []
		){
			if(method_exists($this, '__call')){
				return $this->__call('getUpdates', func_get_args());
			}
		}
		/**
		 * @param $offset integer
		 * @param $limit integer
		 * @param $timeout integer
		 * @param $allowedUpdates array
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getUpdatesAsync(
			$offset = null,
			$limit = null,
			$timeout = null,
			$allowedUpdates = []
		){
			if(method_exists($this, '__call')){
				return $this->__call('getUpdatesAsync', func_get_args());
			}
		}
		/**
		 * @param $url string
		 * @param $certificate \TelegramBot\Api\Extension\InputFile
		 * @param $maxConnections integer
		 * @param $allowedUpdates array
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function setWebhook(
			$url,
			$certificate,
			$maxConnections = null,
			$allowedUpdates = []
		){
			if(method_exists($this, '__call')){
				return $this->__call('setWebhook', func_get_args());
			}
		}
		/**
		 * @param $url string
		 * @param $certificate \TelegramBot\Api\Extension\InputFile
		 * @param $maxConnections integer
		 * @param $allowedUpdates array
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function setWebhookAsync(
			$url,
			$certificate,
			$maxConnections = null,
			$allowedUpdates = []
		){
			if(method_exists($this, '__call')){
				return $this->__call('setWebhookAsync', func_get_args());
			}
		}
		/**
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function deleteWebhook(){
			if(method_exists($this, '__call')){
				return $this->__call('deleteWebhook', func_get_args());
			}
		}
		/**
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function deleteWebhookAsync(){
			if(method_exists($this, '__call')){
				return $this->__call('deleteWebhookAsync', func_get_args());
			}
		}
		/**
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function getWebhookInfo(){
			if(method_exists($this, '__call')){
				return $this->__call('getWebhookInfo', func_get_args());
			}
		}
		/**
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getWebhookInfoAsync(){
			if(method_exists($this, '__call')){
				return $this->__call('getWebhookInfoAsync', func_get_args());
			}
		}
		/**
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\User
		*/
		public function getMe(){
			if(method_exists($this, '__call')){
				return $this->__call('getMe', func_get_args());
			}
		}
		/**
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getMeAsync(){
			if(method_exists($this, '__call')){
				return $this->__call('getMeAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $text string
		 * @param $parseMode string
		 * @param $disableWebPagePreview boolean
		 * @param $disableNotification boolean
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @param $replyToMessageId integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendMessage(
			$chatId,
			$text,
			$parseMode = null,
			$disableWebPagePreview = false,
			$disableNotification = false,
			$replyMarkup = null,
			$replyToMessageId = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendMessage', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $text string
		 * @param $parseMode string
		 * @param $disableWebPagePreview boolean
		 * @param $disableNotification boolean
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @param $replyToMessageId integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendMessageAsync(
			$chatId,
			$text,
			$parseMode = null,
			$disableWebPagePreview = false,
			$disableNotification = false,
			$replyMarkup = null,
			$replyToMessageId = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendMessageAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $fromChatId integer
		 * @param $messageId integer
		 * @param $disableNotification boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function forwardMessage(
			$chatId,
			$fromChatId,
			$messageId,
			$disableNotification = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('forwardMessage', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $fromChatId integer
		 * @param $messageId integer
		 * @param $disableNotification boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function forwardMessageAsync(
			$chatId,
			$fromChatId,
			$messageId,
			$disableNotification = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('forwardMessageAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $photo \TelegramBot\Api\Extension\InputFile|string
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendPhoto(
			$chatId,
			$photo,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendPhoto', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $photo \TelegramBot\Api\Extension\InputFile|string
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendPhotoAsync(
			$chatId,
			$photo,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendPhotoAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $audio \TelegramBot\Api\Extension\InputFile|string
		 * @param $duration integer
		 * @param $performer string
		 * @param $title string
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendAudio(
			$chatId,
			$audio,
			$duration = null,
			$performer = null,
			$title = null,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendAudio', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $audio \TelegramBot\Api\Extension\InputFile|string
		 * @param $duration integer
		 * @param $performer string
		 * @param $title string
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendAudioAsync(
			$chatId,
			$audio,
			$duration = null,
			$performer = null,
			$title = null,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendAudioAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $document \TelegramBot\Api\Extension\InputFile|string
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendDocument(
			$chatId,
			$document,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendDocument', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $document \TelegramBot\Api\Extension\InputFile|string
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendDocumentAsync(
			$chatId,
			$document,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendDocumentAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $video \TelegramBot\Api\Extension\InputFile|string
		 * @param $duration integer
		 * @param $width integer
		 * @param $height integer
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendVideo(
			$chatId,
			$video,
			$duration = null,
			$width = null,
			$height = null,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVideo', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $video \TelegramBot\Api\Extension\InputFile|string
		 * @param $duration integer
		 * @param $width integer
		 * @param $height integer
		 * @param $caption string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendVideoAsync(
			$chatId,
			$video,
			$duration = null,
			$width = null,
			$height = null,
			$caption = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVideoAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $voice \TelegramBot\Api\Extension\InputFile|string
		 * @param $caption string
		 * @param $duration integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendVoice(
			$chatId,
			$voice,
			$caption = null,
			$duration = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVoice', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $voice \TelegramBot\Api\Extension\InputFile|string
		 * @param $caption string
		 * @param $duration integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendVoiceAsync(
			$chatId,
			$voice,
			$caption = null,
			$duration = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVoiceAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $videoNote \TelegramBot\Api\Extension\InputFile|string
		 * @param $duration integer
		 * @param $length integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendVideoNote(
			$chatId,
			$videoNote,
			$duration = null,
			$length = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVideoNote', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $videoNote \TelegramBot\Api\Extension\InputFile|string
		 * @param $duration integer
		 * @param $length integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendVideoNoteAsync(
			$chatId,
			$videoNote,
			$duration = null,
			$length = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVideoNoteAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $media array
		 * @param $duration integer
		 * @param $length integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Iterators\ArrayOfMessage
		*/
		public function sendMediaGroup(
			$chatId,
			$media,
			$duration = null,
			$length = null,
			$disableNotification = false,
			$replyToMessageId = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendMediaGroup', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $media array
		 * @param $duration integer
		 * @param $length integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendMediaGroupAsync(
			$chatId,
			$media,
			$duration = null,
			$length = null,
			$disableNotification = false,
			$replyToMessageId = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendMediaGroupAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $latitude float
		 * @param $longitude float
		 * @param $livePeriod integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendLocation(
			$chatId,
			$latitude,
			$longitude,
			$livePeriod = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendLocation', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $latitude float
		 * @param $longitude float
		 * @param $livePeriod integer
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendLocationAsync(
			$chatId,
			$latitude,
			$longitude,
			$livePeriod = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendLocationAsync', func_get_args());
			}
		}
		/**
		 * @param $latitude float
		 * @param $longitude float
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $inlineMessageId string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message|boolean
		*/
		public function editMessageLiveLocation(
			$latitude,
			$longitude,
			$chatId = null,
			$messageId = null,
			$inlineMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageLiveLocation', func_get_args());
			}
		}
		/**
		 * @param $latitude float
		 * @param $longitude float
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $inlineMessageId string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function editMessageLiveLocationAsync(
			$latitude,
			$longitude,
			$chatId = null,
			$messageId = null,
			$inlineMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageLiveLocationAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $inlineMessageId string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message|boolean
		*/
		public function stopMessageLiveLocation(
			$chatId = null,
			$messageId = null,
			$inlineMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('stopMessageLiveLocation', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $inlineMessageId string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function stopMessageLiveLocationAsync(
			$chatId = null,
			$messageId = null,
			$inlineMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('stopMessageLiveLocationAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $latitude float
		 * @param $longitude float
		 * @param $title string
		 * @param $address string
		 * @param $foursquareId string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendVenue(
			$chatId,
			$latitude,
			$longitude,
			$title,
			$address,
			$foursquareId = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVenue', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $latitude float
		 * @param $longitude float
		 * @param $title string
		 * @param $address string
		 * @param $foursquareId string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendVenueAsync(
			$chatId,
			$latitude,
			$longitude,
			$title,
			$address,
			$foursquareId = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendVenueAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $phoneNumber string
		 * @param $firstName string
		 * @param $lastName string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendContact(
			$chatId,
			$phoneNumber,
			$firstName,
			$lastName = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendContact', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $phoneNumber string
		 * @param $firstName string
		 * @param $lastName string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendContactAsync(
			$chatId,
			$phoneNumber,
			$firstName,
			$lastName = null,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendContactAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $action string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function sendChatAction(
			$chatId,
			$action
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendChatAction', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $action string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendChatActionAsync(
			$chatId,
			$action
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendChatActionAsync', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $offset integer
		 * @param $limit integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\UserProfilePhotos
		*/
		public function getUserProfilePhotos(
			$userId,
			$offset = null,
			$limit = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('getUserProfilePhotos', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $offset integer
		 * @param $limit integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getUserProfilePhotosAsync(
			$userId,
			$offset = null,
			$limit = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('getUserProfilePhotosAsync', func_get_args());
			}
		}
		/**
		 * @param $fileId string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\File
		*/
		public function getFile(
			$fileId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getFile', func_get_args());
			}
		}
		/**
		 * @param $fileId string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getFileAsync(
			$fileId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getFileAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer|string
		 * @param $untilDate integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function kickChatMember(
			$chatId,
			$userId,
			$untilDate = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('kickChatMember', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer|string
		 * @param $untilDate integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function kickChatMemberAsync(
			$chatId,
			$userId,
			$untilDate = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('kickChatMemberAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function unbanChatMember(
			$chatId,
			$userId
		){
			if(method_exists($this, '__call')){
				return $this->__call('unbanChatMember', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function unbanChatMemberAsync(
			$chatId,
			$userId
		){
			if(method_exists($this, '__call')){
				return $this->__call('unbanChatMemberAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer
		 * @param $untilDate integer
		 * @param $canSendMessages boolean
		 * @param $canSendMediaMessages boolean
		 * @param $canSendOtherMessages boolean
		 * @param $canAddWebPagePreviews boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function restrictChatMember(
			$chatId,
			$userId,
			$untilDate = null,
			$canSendMessages = false,
			$canSendMediaMessages = false,
			$canSendOtherMessages = false,
			$canAddWebPagePreviews = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('restrictChatMember', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer
		 * @param $untilDate integer
		 * @param $canSendMessages boolean
		 * @param $canSendMediaMessages boolean
		 * @param $canSendOtherMessages boolean
		 * @param $canAddWebPagePreviews boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function restrictChatMemberAsync(
			$chatId,
			$userId,
			$untilDate = null,
			$canSendMessages = false,
			$canSendMediaMessages = false,
			$canSendOtherMessages = false,
			$canAddWebPagePreviews = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('restrictChatMemberAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer
		 * @param $untilDate integer
		 * @param $canChangeInfo boolean
		 * @param $canPostMessages boolean
		 * @param $canEditMessages boolean
		 * @param $canDeleteMessages boolean
		 * @param $canInviteUsers boolean
		 * @param $canRestrictMembers boolean
		 * @param $canPinMessages boolean
		 * @param $canPromoteMembers boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function promoteChatMember(
			$chatId,
			$userId,
			$untilDate = null,
			$canChangeInfo = false,
			$canPostMessages = false,
			$canEditMessages = false,
			$canDeleteMessages = false,
			$canInviteUsers = false,
			$canRestrictMembers = false,
			$canPinMessages = false,
			$canPromoteMembers = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('promoteChatMember', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer
		 * @param $untilDate integer
		 * @param $canChangeInfo boolean
		 * @param $canPostMessages boolean
		 * @param $canEditMessages boolean
		 * @param $canDeleteMessages boolean
		 * @param $canInviteUsers boolean
		 * @param $canRestrictMembers boolean
		 * @param $canPinMessages boolean
		 * @param $canPromoteMembers boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function promoteChatMemberAsync(
			$chatId,
			$userId,
			$untilDate = null,
			$canChangeInfo = false,
			$canPostMessages = false,
			$canEditMessages = false,
			$canDeleteMessages = false,
			$canInviteUsers = false,
			$canRestrictMembers = false,
			$canPinMessages = false,
			$canPromoteMembers = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('promoteChatMemberAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return string
		*/
		public function exportChatInviteLink(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('exportChatInviteLink', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function exportChatInviteLinkAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('exportChatInviteLinkAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $photo \TelegramBot\Api\Extension\InputFile
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function setChatPhoto(
			$chatId,
			$photo
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatPhoto', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $photo \TelegramBot\Api\Extension\InputFile
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function setChatPhotoAsync(
			$chatId,
			$photo
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatPhotoAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function deleteChatPhoto(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteChatPhoto', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function deleteChatPhotoAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteChatPhotoAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $title string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function setChatTitle(
			$chatId,
			$title
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatTitle', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $title string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function setChatTitleAsync(
			$chatId,
			$title
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatTitleAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $description string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function setChatDescription(
			$chatId,
			$description = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatDescription', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $description string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function setChatDescriptionAsync(
			$chatId,
			$description = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatDescriptionAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $disableNotification boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function pinChatMessage(
			$chatId,
			$messageId,
			$disableNotification = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('pinChatMessage', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $disableNotification boolean
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function pinChatMessageAsync(
			$chatId,
			$messageId,
			$disableNotification = false
		){
			if(method_exists($this, '__call')){
				return $this->__call('pinChatMessageAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function unpinChatMessage(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('unpinChatMessage', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function unpinChatMessageAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('unpinChatMessageAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function leaveChat(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('leaveChat', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function leaveChatAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('leaveChatAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Chat
		*/
		public function getChat(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChat', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getChatAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChatAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Iterators\ArrayOfChatMember
		*/
		public function getChatAdministrators(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChatAdministrators', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getChatAdministratorsAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChatAdministratorsAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return integer
		*/
		public function getChatMembersCount(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChatMembersCount', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getChatMembersCountAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChatMembersCountAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\ChatMember
		*/
		public function getChatMember(
			$chatId,
			$userId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChatMember', func_get_args());
			}
		}
		/**
		 * @param $chatId integer
		 * @param $userId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getChatMemberAsync(
			$chatId,
			$userId
		){
			if(method_exists($this, '__call')){
				return $this->__call('getChatMemberAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $stickerSetName string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function setChatStickerSet(
			$chatId,
			$stickerSetName
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatStickerSet', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $stickerSetName string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function setChatStickerSetAsync(
			$chatId,
			$stickerSetName
		){
			if(method_exists($this, '__call')){
				return $this->__call('setChatStickerSetAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function deleteChatStickerSet(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteChatStickerSet', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function deleteChatStickerSetAsync(
			$chatId
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteChatStickerSetAsync', func_get_args());
			}
		}
		/**
		 * @param $callbackQueryId string
		 * @param $text string
		 * @param $showAlert boolean
		 * @param $url string
		 * @param $cacheTime integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function answerCallbackQuery(
			$callbackQueryId,
			$text = null,
			$showAlert = false,
			$url = null,
			$cacheTime = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerCallbackQuery', func_get_args());
			}
		}
		/**
		 * @param $callbackQueryId string
		 * @param $text string
		 * @param $showAlert boolean
		 * @param $url string
		 * @param $cacheTime integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function answerCallbackQueryAsync(
			$callbackQueryId,
			$text = null,
			$showAlert = false,
			$url = null,
			$cacheTime = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerCallbackQueryAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $text string
		 * @param $inlineMessageId string
		 * @param $parseMode string
		 * @param $disableWebPagePreview boolean
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message|boolean
		*/
		public function editMessageText(
			$chatId,
			$messageId,
			$text,
			$inlineMessageId = null,
			$parseMode = null,
			$disableWebPagePreview = false,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageText', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $text string
		 * @param $inlineMessageId string
		 * @param $parseMode string
		 * @param $disableWebPagePreview boolean
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function editMessageTextAsync(
			$chatId,
			$messageId,
			$text,
			$inlineMessageId = null,
			$parseMode = null,
			$disableWebPagePreview = false,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageTextAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $caption string
		 * @param $inlineMessageId string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message|boolean
		*/
		public function editMessageCaption(
			$chatId,
			$messageId,
			$caption,
			$inlineMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageCaption', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $caption string
		 * @param $inlineMessageId string
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function editMessageCaptionAsync(
			$chatId,
			$messageId,
			$caption,
			$inlineMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageCaptionAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @param $inlineMessageId string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message|boolean
		*/
		public function editMessageReplyMarkup(
			$chatId,
			$messageId,
			$replyMarkup,
			$inlineMessageId = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageReplyMarkup', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @param $inlineMessageId string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function editMessageReplyMarkupAsync(
			$chatId,
			$messageId,
			$replyMarkup,
			$inlineMessageId = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('editMessageReplyMarkupAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function deleteMessage(
			$chatId,
			$messageId
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteMessage', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $messageId integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function deleteMessageAsync(
			$chatId,
			$messageId
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteMessageAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $sticker \TelegramBot\Api\Extension\InputFile|string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId boolean
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendSticker(
			$chatId,
			$sticker,
			$disableNotification = false,
			$replyToMessageId = false,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendSticker', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $sticker \TelegramBot\Api\Extension\InputFile|string
		 * @param $disableNotification boolean
		 * @param $replyToMessageId boolean
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendStickerAsync(
			$chatId,
			$sticker,
			$disableNotification = false,
			$replyToMessageId = false,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendStickerAsync', func_get_args());
			}
		}
		/**
		 * @param $name string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\StickerSet
		*/
		public function getStickerSet(
			$name
		){
			if(method_exists($this, '__call')){
				return $this->__call('getStickerSet', func_get_args());
			}
		}
		/**
		 * @param $name string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function getStickerSetAsync(
			$name
		){
			if(method_exists($this, '__call')){
				return $this->__call('getStickerSetAsync', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $pngSticker \TelegramBot\Api\Extension\InputFile
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\File
		*/
		public function uploadStickerFile(
			$userId,
			$pngSticker
		){
			if(method_exists($this, '__call')){
				return $this->__call('uploadStickerFile', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $pngSticker \TelegramBot\Api\Extension\InputFile
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function uploadStickerFileAsync(
			$userId,
			$pngSticker
		){
			if(method_exists($this, '__call')){
				return $this->__call('uploadStickerFileAsync', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $name string
		 * @param $pngSticker \TelegramBot\Api\Extension\InputFile|string
		 * @param $emojis string
		 * @param $containsMasks boolean
		 * @param $maskPosition \TelegramBot\Api\Types\MaskPosition
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function createNewStickerSet(
			$userId,
			$name,
			$pngSticker,
			$emojis,
			$containsMasks = false,
			$maskPosition = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('createNewStickerSet', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $name string
		 * @param $pngSticker \TelegramBot\Api\Extension\InputFile|string
		 * @param $emojis string
		 * @param $containsMasks boolean
		 * @param $maskPosition \TelegramBot\Api\Types\MaskPosition
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function createNewStickerSetAsync(
			$userId,
			$name,
			$pngSticker,
			$emojis,
			$containsMasks = false,
			$maskPosition = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('createNewStickerSetAsync', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $name string
		 * @param $pngSticker \TelegramBot\Api\Extension\InputFile|string
		 * @param $emojis string
		 * @param $maskPosition \TelegramBot\Api\Types\MaskPosition
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function addStickerToSet(
			$userId,
			$name,
			$pngSticker,
			$emojis,
			$maskPosition = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('addStickerToSet', func_get_args());
			}
		}
		/**
		 * @param $userId integer
		 * @param $name string
		 * @param $pngSticker \TelegramBot\Api\Extension\InputFile|string
		 * @param $emojis string
		 * @param $maskPosition \TelegramBot\Api\Types\MaskPosition
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function addStickerToSetAsync(
			$userId,
			$name,
			$pngSticker,
			$emojis,
			$maskPosition = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('addStickerToSetAsync', func_get_args());
			}
		}
		/**
		 * @param $sticker string
		 * @param $position integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function setStickerPositionInSet(
			$sticker,
			$position
		){
			if(method_exists($this, '__call')){
				return $this->__call('setStickerPositionInSet', func_get_args());
			}
		}
		/**
		 * @param $sticker string
		 * @param $position integer
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function setStickerPositionInSetAsync(
			$sticker,
			$position
		){
			if(method_exists($this, '__call')){
				return $this->__call('setStickerPositionInSetAsync', func_get_args());
			}
		}
		/**
		 * @param $sticker string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function deleteStickerFromSet(
			$sticker
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteStickerFromSet', func_get_args());
			}
		}
		/**
		 * @param $sticker string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function deleteStickerFromSetAsync(
			$sticker
		){
			if(method_exists($this, '__call')){
				return $this->__call('deleteStickerFromSetAsync', func_get_args());
			}
		}
		/**
		 * @param $inlineQueryId string
		 * @param $results array
		 * @param $cacheTime integer
		 * @param $isPersonal boolean
		 * @param $nextOffset string
		 * @param $switchPmText string
		 * @param $switchPmParameter string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function answerInlineQuery(
			$inlineQueryId,
			$results,
			$cacheTime = null,
			$isPersonal = false,
			$nextOffset = null,
			$switchPmText = null,
			$switchPmParameter = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerInlineQuery', func_get_args());
			}
		}
		/**
		 * @param $inlineQueryId string
		 * @param $results array
		 * @param $cacheTime integer
		 * @param $isPersonal boolean
		 * @param $nextOffset string
		 * @param $switchPmText string
		 * @param $switchPmParameter string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function answerInlineQueryAsync(
			$inlineQueryId,
			$results,
			$cacheTime = null,
			$isPersonal = false,
			$nextOffset = null,
			$switchPmText = null,
			$switchPmParameter = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerInlineQueryAsync', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $title string
		 * @param $description string
		 * @param $payload string
		 * @param $providerToken string
		 * @param $startParameter string
		 * @param $currency string
		 * @param $prices array
		 * @param $providerData string
		 * @param $photoUrl string
		 * @param $photoSize integer
		 * @param $photoWidth integer
		 * @param $photoHeight integer
		 * @param $needName boolean
		 * @param $needPhoneNumber boolean
		 * @param $needEmail boolean
		 * @param $needShippingAddress boolean
		 * @param $isFlexible boolean
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \TelegramBot\Api\Types\Message
		*/
		public function sendInvoice(
			$chatId,
			$title,
			$description,
			$payload,
			$providerToken,
			$startParameter,
			$currency,
			$prices,
			$providerData = null,
			$photoUrl = null,
			$photoSize = null,
			$photoWidth = null,
			$photoHeight = null,
			$needName = false,
			$needPhoneNumber = false,
			$needEmail = false,
			$needShippingAddress = false,
			$isFlexible = false,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendInvoice', func_get_args());
			}
		}
		/**
		 * @param $chatId integer|string
		 * @param $title string
		 * @param $description string
		 * @param $payload string
		 * @param $providerToken string
		 * @param $startParameter string
		 * @param $currency string
		 * @param $prices array
		 * @param $providerData string
		 * @param $photoUrl string
		 * @param $photoSize integer
		 * @param $photoWidth integer
		 * @param $photoHeight integer
		 * @param $needName boolean
		 * @param $needPhoneNumber boolean
		 * @param $needEmail boolean
		 * @param $needShippingAddress boolean
		 * @param $isFlexible boolean
		 * @param $disableNotification boolean
		 * @param $replyToMessageId integer
		 * @param $replyMarkup \TelegramBot\Api\Types\InlineKeyboardMarkup
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function sendInvoiceAsync(
			$chatId,
			$title,
			$description,
			$payload,
			$providerToken,
			$startParameter,
			$currency,
			$prices,
			$providerData = null,
			$photoUrl = null,
			$photoSize = null,
			$photoWidth = null,
			$photoHeight = null,
			$needName = false,
			$needPhoneNumber = false,
			$needEmail = false,
			$needShippingAddress = false,
			$isFlexible = false,
			$disableNotification = false,
			$replyToMessageId = null,
			$replyMarkup = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('sendInvoiceAsync', func_get_args());
			}
		}
		/**
		 * @param $shippingQueryId string
		 * @param $ok boolean
		 * @param $shippingOptions array
		 * @param $errorMessage string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function answerShippingQuery(
			$shippingQueryId,
			$ok,
			$shippingOptions = [],
			$errorMessage = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerShippingQuery', func_get_args());
			}
		}
		/**
		 * @param $shippingQueryId string
		 * @param $ok boolean
		 * @param $shippingOptions array
		 * @param $errorMessage string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function answerShippingQueryAsync(
			$shippingQueryId,
			$ok,
			$shippingOptions = [],
			$errorMessage = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerShippingQueryAsync', func_get_args());
			}
		}
		/**
		 * @param $preCheckoutQueryId string
		 * @param $ok boolean
		 * @param $errorMessage string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return boolean
		*/
		public function answerPreCheckoutQuery(
			$preCheckoutQueryId,
			$ok,
			$errorMessage = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerPreCheckoutQuery', func_get_args());
			}
		}
		/**
		 * @param $preCheckoutQueryId string
		 * @param $ok boolean
		 * @param $errorMessage string
		 * @throws \TelegramBot\Api\Exceptions\TelegramException
		 * @return \GuzzleHttp\Promise\PromiseInterface
		*/
		public function answerPreCheckoutQueryAsync(
			$preCheckoutQueryId,
			$ok,
			$errorMessage = null
		){
			if(method_exists($this, '__call')){
				return $this->__call('answerPreCheckoutQueryAsync', func_get_args());
			}
		}
}
