<?php
namespace TelegramBot\Api;
/**
* @method \TelegramBot\Api\Types\Update[] getUpdates(integer $offset = null, integer $limit = null, integer $timeout = null, array $allowedUpdates = [])
* @method \GuzzleHttp\Promise\PromiseInterface getUpdatesAsync(integer $offset = null, integer $limit = null, integer $timeout = null, array $allowedUpdates = [])
* @method \TelegramBot\Api\Methods\getUpdates initGetUpdates(integer $offset = null, integer $limit = null, integer $timeout = null, array $allowedUpdates = [])
* @method boolean setWebhook(string $url, \TelegramBot\Api\Extension\InputFile $certificate, integer $maxConnections = null, array $allowedUpdates = [])
* @method \GuzzleHttp\Promise\PromiseInterface setWebhookAsync(string $url, \TelegramBot\Api\Extension\InputFile $certificate, integer $maxConnections = null, array $allowedUpdates = [])
* @method \TelegramBot\Api\Methods\setWebhook initSetWebhook(string $url, \TelegramBot\Api\Extension\InputFile $certificate, integer $maxConnections = null, array $allowedUpdates = [])
* @method boolean deleteWebhook()
* @method \GuzzleHttp\Promise\PromiseInterface deleteWebhookAsync()
* @method \TelegramBot\Api\Methods\deleteWebhook initDeleteWebhook()
* @method boolean getWebhookInfo()
* @method \GuzzleHttp\Promise\PromiseInterface getWebhookInfoAsync()
* @method \TelegramBot\Api\Methods\getWebhookInfo initGetWebhookInfo()
* @method \TelegramBot\Api\Types\User getMe()
* @method \GuzzleHttp\Promise\PromiseInterface getMeAsync()
* @method \TelegramBot\Api\Methods\getMe initGetMe()
* @method \TelegramBot\Api\Types\Message sendMessage(integer|string $chatId, string $text, string $parseMode = null, boolean $disableWebPagePreview = false, boolean $disableNotification = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null, integer $replyToMessageId = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendMessageAsync(integer|string $chatId, string $text, string $parseMode = null, boolean $disableWebPagePreview = false, boolean $disableNotification = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null, integer $replyToMessageId = null)
* @method \TelegramBot\Api\Methods\sendMessage initSendMessage(integer|string $chatId, string $text, string $parseMode = null, boolean $disableWebPagePreview = false, boolean $disableNotification = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null, integer $replyToMessageId = null)
* @method \TelegramBot\Api\Types\Message forwardMessage(integer $chatId, integer $fromChatId, integer $messageId, boolean $disableNotification = false)
* @method \GuzzleHttp\Promise\PromiseInterface forwardMessageAsync(integer $chatId, integer $fromChatId, integer $messageId, boolean $disableNotification = false)
* @method \TelegramBot\Api\Methods\forwardMessage initForwardMessage(integer $chatId, integer $fromChatId, integer $messageId, boolean $disableNotification = false)
* @method \TelegramBot\Api\Types\Message sendPhoto(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $photo, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendPhotoAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $photo, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendPhoto initSendPhoto(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $photo, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message sendAudio(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $audio, integer $duration = null, string $performer = null, string $title = null, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendAudioAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $audio, integer $duration = null, string $performer = null, string $title = null, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendAudio initSendAudio(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $audio, integer $duration = null, string $performer = null, string $title = null, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message sendDocument(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $document, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendDocumentAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $document, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendDocument initSendDocument(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $document, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message sendVideo(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $video, integer $duration = null, integer $width = null, integer $height = null, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendVideoAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $video, integer $duration = null, integer $width = null, integer $height = null, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendVideo initSendVideo(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $video, integer $duration = null, integer $width = null, integer $height = null, string $caption = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message sendVoice(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $voice, string $caption = null, integer $duration = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendVoiceAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $voice, string $caption = null, integer $duration = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendVoice initSendVoice(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $voice, string $caption = null, integer $duration = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message sendVideoNote(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $videoNote, integer $duration = null, integer $length = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendVideoNoteAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $videoNote, integer $duration = null, integer $length = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendVideoNote initSendVideoNote(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $videoNote, integer $duration = null, integer $length = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message[] sendMediaGroup(integer|string $chatId, array $media, integer $duration = null, integer $length = null, boolean $disableNotification = false, integer $replyToMessageId = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendMediaGroupAsync(integer|string $chatId, array $media, integer $duration = null, integer $length = null, boolean $disableNotification = false, integer $replyToMessageId = null)
* @method \TelegramBot\Api\Methods\sendMediaGroup initSendMediaGroup(integer|string $chatId, array $media, integer $duration = null, integer $length = null, boolean $disableNotification = false, integer $replyToMessageId = null)
* @method \TelegramBot\Api\Types\Message sendLocation(integer $chatId, float $latitude, float $longitude, integer $livePeriod = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendLocationAsync(integer $chatId, float $latitude, float $longitude, integer $livePeriod = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendLocation initSendLocation(integer $chatId, float $latitude, float $longitude, integer $livePeriod = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message|boolean editMessageLiveLocation(float $latitude, float $longitude, integer|string $chatId = null, integer $messageId = null, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface editMessageLiveLocationAsync(float $latitude, float $longitude, integer|string $chatId = null, integer $messageId = null, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\editMessageLiveLocation initEditMessageLiveLocation(float $latitude, float $longitude, integer|string $chatId = null, integer $messageId = null, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message|boolean stopMessageLiveLocation(integer|string $chatId = null, integer $messageId = null, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface stopMessageLiveLocationAsync(integer|string $chatId = null, integer $messageId = null, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\stopMessageLiveLocation initStopMessageLiveLocation(integer|string $chatId = null, integer $messageId = null, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message sendVenue(integer $chatId, float $latitude, float $longitude, string $title, string $address, string $foursquareId = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendVenueAsync(integer $chatId, float $latitude, float $longitude, string $title, string $address, string $foursquareId = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendVenue initSendVenue(integer $chatId, float $latitude, float $longitude, string $title, string $address, string $foursquareId = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message sendContact(integer $chatId, string $phoneNumber, string $firstName, string $lastName = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendContactAsync(integer $chatId, string $phoneNumber, string $firstName, string $lastName = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendContact initSendContact(integer $chatId, string $phoneNumber, string $firstName, string $lastName = null, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method boolean sendChatAction(integer $chatId, string $action)
* @method \GuzzleHttp\Promise\PromiseInterface sendChatActionAsync(integer $chatId, string $action)
* @method \TelegramBot\Api\Methods\sendChatAction initSendChatAction(integer $chatId, string $action)
* @method \TelegramBot\Api\Types\UserProfilePhotos getUserProfilePhotos(integer $userId, integer $offset = null, integer $limit = null)
* @method \GuzzleHttp\Promise\PromiseInterface getUserProfilePhotosAsync(integer $userId, integer $offset = null, integer $limit = null)
* @method \TelegramBot\Api\Methods\getUserProfilePhotos initGetUserProfilePhotos(integer $userId, integer $offset = null, integer $limit = null)
* @method \TelegramBot\Api\Types\File getFile(string $fileId)
* @method \GuzzleHttp\Promise\PromiseInterface getFileAsync(string $fileId)
* @method \TelegramBot\Api\Methods\getFile initGetFile(string $fileId)
* @method boolean kickChatMember(integer $chatId, integer|string $userId, integer $untilDate = null)
* @method \GuzzleHttp\Promise\PromiseInterface kickChatMemberAsync(integer $chatId, integer|string $userId, integer $untilDate = null)
* @method \TelegramBot\Api\Methods\kickChatMember initKickChatMember(integer $chatId, integer|string $userId, integer $untilDate = null)
* @method boolean unbanChatMember(integer $chatId, integer|string $userId)
* @method \GuzzleHttp\Promise\PromiseInterface unbanChatMemberAsync(integer $chatId, integer|string $userId)
* @method \TelegramBot\Api\Methods\unbanChatMember initUnbanChatMember(integer $chatId, integer|string $userId)
* @method boolean restrictChatMember(integer $chatId, integer $userId, integer $untilDate = null, boolean $canSendMessages = false, boolean $canSendMediaMessages = false, boolean $canSendOtherMessages = false, boolean $canAddWebPagePreviews = false)
* @method \GuzzleHttp\Promise\PromiseInterface restrictChatMemberAsync(integer $chatId, integer $userId, integer $untilDate = null, boolean $canSendMessages = false, boolean $canSendMediaMessages = false, boolean $canSendOtherMessages = false, boolean $canAddWebPagePreviews = false)
* @method \TelegramBot\Api\Methods\restrictChatMember initRestrictChatMember(integer $chatId, integer $userId, integer $untilDate = null, boolean $canSendMessages = false, boolean $canSendMediaMessages = false, boolean $canSendOtherMessages = false, boolean $canAddWebPagePreviews = false)
* @method boolean promoteChatMember(integer $chatId, integer $userId, integer $untilDate = null, boolean $canChangeInfo = false, boolean $canPostMessages = false, boolean $canEditMessages = false, boolean $canDeleteMessages = false, boolean $canInviteUsers = false, boolean $canRestrictMembers = false, boolean $canPinMessages = false, boolean $canPromoteMembers = false)
* @method \GuzzleHttp\Promise\PromiseInterface promoteChatMemberAsync(integer $chatId, integer $userId, integer $untilDate = null, boolean $canChangeInfo = false, boolean $canPostMessages = false, boolean $canEditMessages = false, boolean $canDeleteMessages = false, boolean $canInviteUsers = false, boolean $canRestrictMembers = false, boolean $canPinMessages = false, boolean $canPromoteMembers = false)
* @method \TelegramBot\Api\Methods\promoteChatMember initPromoteChatMember(integer $chatId, integer $userId, integer $untilDate = null, boolean $canChangeInfo = false, boolean $canPostMessages = false, boolean $canEditMessages = false, boolean $canDeleteMessages = false, boolean $canInviteUsers = false, boolean $canRestrictMembers = false, boolean $canPinMessages = false, boolean $canPromoteMembers = false)
* @method string exportChatInviteLink(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface exportChatInviteLinkAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\exportChatInviteLink initExportChatInviteLink(integer|string $chatId)
* @method boolean setChatPhoto(integer|string $chatId, \TelegramBot\Api\Extension\InputFile $photo)
* @method \GuzzleHttp\Promise\PromiseInterface setChatPhotoAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile $photo)
* @method \TelegramBot\Api\Methods\setChatPhoto initSetChatPhoto(integer|string $chatId, \TelegramBot\Api\Extension\InputFile $photo)
* @method boolean deleteChatPhoto(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface deleteChatPhotoAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\deleteChatPhoto initDeleteChatPhoto(integer|string $chatId)
* @method boolean setChatTitle(integer|string $chatId, string $title)
* @method \GuzzleHttp\Promise\PromiseInterface setChatTitleAsync(integer|string $chatId, string $title)
* @method \TelegramBot\Api\Methods\setChatTitle initSetChatTitle(integer|string $chatId, string $title)
* @method boolean setChatDescription(integer|string $chatId, string $description = null)
* @method \GuzzleHttp\Promise\PromiseInterface setChatDescriptionAsync(integer|string $chatId, string $description = null)
* @method \TelegramBot\Api\Methods\setChatDescription initSetChatDescription(integer|string $chatId, string $description = null)
* @method boolean pinChatMessage(integer|string $chatId, integer $messageId, boolean $disableNotification = false)
* @method \GuzzleHttp\Promise\PromiseInterface pinChatMessageAsync(integer|string $chatId, integer $messageId, boolean $disableNotification = false)
* @method \TelegramBot\Api\Methods\pinChatMessage initPinChatMessage(integer|string $chatId, integer $messageId, boolean $disableNotification = false)
* @method boolean unpinChatMessage(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface unpinChatMessageAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\unpinChatMessage initUnpinChatMessage(integer|string $chatId)
* @method boolean leaveChat(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface leaveChatAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\leaveChat initLeaveChat(integer|string $chatId)
* @method \TelegramBot\Api\Types\Chat getChat(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface getChatAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\getChat initGetChat(integer|string $chatId)
* @method \TelegramBot\Api\Types\ChatMember[] getChatAdministrators(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface getChatAdministratorsAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\getChatAdministrators initGetChatAdministrators(integer|string $chatId)
* @method integer getChatMembersCount(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface getChatMembersCountAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\getChatMembersCount initGetChatMembersCount(integer|string $chatId)
* @method \TelegramBot\Api\Types\ChatMember getChatMember(integer $chatId, integer|string $userId)
* @method \GuzzleHttp\Promise\PromiseInterface getChatMemberAsync(integer $chatId, integer|string $userId)
* @method \TelegramBot\Api\Methods\getChatMember initGetChatMember(integer $chatId, integer|string $userId)
* @method boolean setChatStickerSet(integer|string $chatId, string $stickerSetName)
* @method \GuzzleHttp\Promise\PromiseInterface setChatStickerSetAsync(integer|string $chatId, string $stickerSetName)
* @method \TelegramBot\Api\Methods\setChatStickerSet initSetChatStickerSet(integer|string $chatId, string $stickerSetName)
* @method boolean deleteChatStickerSet(integer|string $chatId)
* @method \GuzzleHttp\Promise\PromiseInterface deleteChatStickerSetAsync(integer|string $chatId)
* @method \TelegramBot\Api\Methods\deleteChatStickerSet initDeleteChatStickerSet(integer|string $chatId)
* @method boolean answerCallbackQuery(string $callbackQueryId, string $text = null, boolean $showAlert = false, boolean $url = false, integer $cacheTime = null)
* @method \GuzzleHttp\Promise\PromiseInterface answerCallbackQueryAsync(string $callbackQueryId, string $text = null, boolean $showAlert = false, boolean $url = false, integer $cacheTime = null)
* @method \TelegramBot\Api\Methods\answerCallbackQuery initAnswerCallbackQuery(string $callbackQueryId, string $text = null, boolean $showAlert = false, boolean $url = false, integer $cacheTime = null)
* @method \TelegramBot\Api\Types\Message|boolean editMessageText(integer|string $chatId, integer $messageId, string $text, string $inlineMessageId = null, string $parseMode = null, boolean $disableWebPagePreview = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface editMessageTextAsync(integer|string $chatId, integer $messageId, string $text, string $inlineMessageId = null, string $parseMode = null, boolean $disableWebPagePreview = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\editMessageText initEditMessageText(integer|string $chatId, integer $messageId, string $text, string $inlineMessageId = null, string $parseMode = null, boolean $disableWebPagePreview = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message|boolean editMessageCaption(integer|string $chatId, integer $messageId, string $caption, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface editMessageCaptionAsync(integer|string $chatId, integer $messageId, string $caption, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\editMessageCaption initEditMessageCaption(integer|string $chatId, integer $messageId, string $caption, string $inlineMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\Message|boolean editMessageReplyMarkup(integer|string $chatId, integer $messageId, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup, string $inlineMessageId = null)
* @method \GuzzleHttp\Promise\PromiseInterface editMessageReplyMarkupAsync(integer|string $chatId, integer $messageId, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup, string $inlineMessageId = null)
* @method \TelegramBot\Api\Methods\editMessageReplyMarkup initEditMessageReplyMarkup(integer|string $chatId, integer $messageId, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup, string $inlineMessageId = null)
* @method boolean deleteMessage(integer|string $chatId, integer $messageId)
* @method \GuzzleHttp\Promise\PromiseInterface deleteMessageAsync(integer|string $chatId, integer $messageId)
* @method \TelegramBot\Api\Methods\deleteMessage initDeleteMessage(integer|string $chatId, integer $messageId)
* @method \TelegramBot\Api\Types\Message sendSticker(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $sticker, boolean $disableNotification = false, boolean $replyToMessageId = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendStickerAsync(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $sticker, boolean $disableNotification = false, boolean $replyToMessageId = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendSticker initSendSticker(integer|string $chatId, \TelegramBot\Api\Extension\InputFile|string $sticker, boolean $disableNotification = false, boolean $replyToMessageId = false, \TelegramBot\Api\Types\InlineKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardMarkup|\TelegramBot\Api\Types\ReplyKeyboardRemove|\TelegramBot\Api\Types\ForceReply $replyMarkup = null)
* @method \TelegramBot\Api\Types\StickerSet getStickerSet(string $name)
* @method \GuzzleHttp\Promise\PromiseInterface getStickerSetAsync(string $name)
* @method \TelegramBot\Api\Methods\getStickerSet initGetStickerSet(string $name)
* @method \TelegramBot\Api\Types\File uploadStickerFile(integer $userId, \TelegramBot\Api\Extension\InputFile $pngSticker)
* @method \GuzzleHttp\Promise\PromiseInterface uploadStickerFileAsync(integer $userId, \TelegramBot\Api\Extension\InputFile $pngSticker)
* @method \TelegramBot\Api\Methods\uploadStickerFile initUploadStickerFile(integer $userId, \TelegramBot\Api\Extension\InputFile $pngSticker)
* @method boolean createNewStickerSet(integer $userId, string $name, \TelegramBot\Api\Extension\InputFile|string $pngSticker, string $emojis, boolean $containsMasks = false, \TelegramBot\Api\Types\MaskPosition $maskPosition = null)
* @method \GuzzleHttp\Promise\PromiseInterface createNewStickerSetAsync(integer $userId, string $name, \TelegramBot\Api\Extension\InputFile|string $pngSticker, string $emojis, boolean $containsMasks = false, \TelegramBot\Api\Types\MaskPosition $maskPosition = null)
* @method \TelegramBot\Api\Methods\createNewStickerSet initCreateNewStickerSet(integer $userId, string $name, \TelegramBot\Api\Extension\InputFile|string $pngSticker, string $emojis, boolean $containsMasks = false, \TelegramBot\Api\Types\MaskPosition $maskPosition = null)
* @method boolean addStickerToSet(integer $userId, string $name, \TelegramBot\Api\Extension\InputFile|string $pngSticker, string $emojis, \TelegramBot\Api\Types\MaskPosition $maskPosition = null)
* @method \GuzzleHttp\Promise\PromiseInterface addStickerToSetAsync(integer $userId, string $name, \TelegramBot\Api\Extension\InputFile|string $pngSticker, string $emojis, \TelegramBot\Api\Types\MaskPosition $maskPosition = null)
* @method \TelegramBot\Api\Methods\addStickerToSet initAddStickerToSet(integer $userId, string $name, \TelegramBot\Api\Extension\InputFile|string $pngSticker, string $emojis, \TelegramBot\Api\Types\MaskPosition $maskPosition = null)
* @method boolean setStickerPositionInSet(string $sticker, integer $position)
* @method \GuzzleHttp\Promise\PromiseInterface setStickerPositionInSetAsync(string $sticker, integer $position)
* @method \TelegramBot\Api\Methods\setStickerPositionInSet initSetStickerPositionInSet(string $sticker, integer $position)
* @method boolean deleteStickerFromSet(string $sticker)
* @method \GuzzleHttp\Promise\PromiseInterface deleteStickerFromSetAsync(string $sticker)
* @method \TelegramBot\Api\Methods\deleteStickerFromSet initDeleteStickerFromSet(string $sticker)
* @method boolean answerInlineQuery(string $inlineQueryId, array $results, integer $cacheTime = null, boolean $isPersonal = false, string $nextOffset = null, string $switchPmText = null, string $switchPmParameter = null)
* @method \GuzzleHttp\Promise\PromiseInterface answerInlineQueryAsync(string $inlineQueryId, array $results, integer $cacheTime = null, boolean $isPersonal = false, string $nextOffset = null, string $switchPmText = null, string $switchPmParameter = null)
* @method \TelegramBot\Api\Methods\answerInlineQuery initAnswerInlineQuery(string $inlineQueryId, array $results, integer $cacheTime = null, boolean $isPersonal = false, string $nextOffset = null, string $switchPmText = null, string $switchPmParameter = null)
* @method \TelegramBot\Api\Types\Message sendInvoice(integer|string $chatId, string $title, string $description, string $payload, string $providerToken, string $startParameter, string $currency, array $prices, string $providerData = null, string $photoUrl = null, integer $photoSize = null, integer $photoWidth = null, integer $photoHeight = null, boolean $needName = false, boolean $needPhoneNumber = false, boolean $needEmail = false, boolean $needShippingAddress = false, boolean $isFlexible = false, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \GuzzleHttp\Promise\PromiseInterface sendInvoiceAsync(integer|string $chatId, string $title, string $description, string $payload, string $providerToken, string $startParameter, string $currency, array $prices, string $providerData = null, string $photoUrl = null, integer $photoSize = null, integer $photoWidth = null, integer $photoHeight = null, boolean $needName = false, boolean $needPhoneNumber = false, boolean $needEmail = false, boolean $needShippingAddress = false, boolean $isFlexible = false, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Methods\sendInvoice initSendInvoice(integer|string $chatId, string $title, string $description, string $payload, string $providerToken, string $startParameter, string $currency, array $prices, string $providerData = null, string $photoUrl = null, integer $photoSize = null, integer $photoWidth = null, integer $photoHeight = null, boolean $needName = false, boolean $needPhoneNumber = false, boolean $needEmail = false, boolean $needShippingAddress = false, boolean $isFlexible = false, boolean $disableNotification = false, integer $replyToMessageId = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method boolean answerShippingQuery(string $shippingQueryId, boolean $ok, array $shippingOptions = [], string $errorMessage = null)
* @method \GuzzleHttp\Promise\PromiseInterface answerShippingQueryAsync(string $shippingQueryId, boolean $ok, array $shippingOptions = [], string $errorMessage = null)
* @method \TelegramBot\Api\Methods\answerShippingQuery initAnswerShippingQuery(string $shippingQueryId, boolean $ok, array $shippingOptions = [], string $errorMessage = null)
* @method boolean answerPreCheckoutQuery(string $preCheckoutQueryId, boolean $ok, string $errorMessage = null)
* @method \GuzzleHttp\Promise\PromiseInterface answerPreCheckoutQueryAsync(string $preCheckoutQueryId, boolean $ok, string $errorMessage = null)
* @method \TelegramBot\Api\Methods\answerPreCheckoutQuery initAnswerPreCheckoutQuery(string $preCheckoutQueryId, boolean $ok, string $errorMessage = null)
* @method \TelegramBot\Api\Types\ReplyKeyboardMarkup createReplyKeyboardMarkup(array $keyboard, boolean $resizeKeyboard = false, boolean $oneTimeKeyboard = false, boolean $selective = false)
* @method \TelegramBot\Api\Types\KeyboardButton createKeyboardButton(string $text, boolean $requestContact = false, boolean $requestLocation = false)
* @method \TelegramBot\Api\Types\ReplyKeyboardRemove createReplyKeyboardRemove(boolean $removeKeyboard, boolean $selective = false)
* @method \TelegramBot\Api\Types\InlineKeyboardMarkup createInlineKeyboardMarkup(array $inlineKeyboard)
* @method \TelegramBot\Api\Types\InlineKeyboardButton createInlineKeyboardButton(string $text, string $url = null, string $callbackData = null, string $switchInlineQuery = null, string $switchInlineQueryCurrentChat = null, \TelegramBot\Api\Types\CallbackGame $callbackGame = null, boolean $pay = false)
* @method \TelegramBot\Api\Types\ForceReply createForceReply(boolean $forceReply, boolean $selective = false)
* @method \TelegramBot\Api\Types\InlineQueryResultArticle createInlineQueryResultArticle(string $type, string $id, string $title, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null, string $url = null, boolean $hideUrl = false, string $description = null, string $thumbUrl = null, integer $thumbWidth = null, integer $thumbHeight = null)
* @method \TelegramBot\Api\Types\InlineQueryResultAudio createInlineQueryResultAudio(string $type, string $id, string $audioUrl, string $title = null, string $caption = null, string $performer = null, integer $audioDuration = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Types\InlineQueryResultContact createInlineQueryResultContact(string $type, string $id, string $phoneNumber, string $firstName, string $lastName = null, string $thumbUrl = null, integer $thumbWidth = null, integer $thumbHeight = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Types\InlineQueryResultGame createInlineQueryResultGame(string $type, string $id, string $documentUrl, string $title, string $caption = null, string $mimeType = null, string $description = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Types\InlineQueryResultDocument createInlineQueryResultDocument(string $type, string $id, string $gameShortName, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Types\InlineQueryResultGif createInlineQueryResultGif(string $type, string $id, string $gifUrl, integer $gifWidth = null, integer $gifHeight = null, integer $gifDuration = null, string $thumbUrl = null, string $title = null, string $caption = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Types\InlineQueryResultLocation createInlineQueryResultLocation(string $type, string $id, float $latitude, float $longitude, string $title, integer $livePeriod = null, string $thumbUrl = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null, integer $thumbWidth = null, integer $thumbHeight = null)
* @method \TelegramBot\Api\Types\InlineQueryResultMpeg4Gif createInlineQueryResultMpeg4Gif(string $type, string $id, string $mpeg4Url, integer $mpeg4Width = null, integer $mpeg4Height = null, integer $mpeg4Duration = null, string $thumbUrl = null, string $title = null, string $caption = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null)
* @method \TelegramBot\Api\Types\InlineQueryResultPhoto createInlineQueryResultPhoto(string $type, string $id, string $photoUrl, string $thumbUrl = null, integer $photoWidth = null, integer $photoHeight = null, string $title = null, string $caption = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null)
* @method \TelegramBot\Api\Types\InlineQueryResultVenue createInlineQueryResultVenue(string $type, string $id, float $latitude, float $longitude, string $title, integer $address, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null, string $thumbUrl = null, integer $thumbWidth = null, integer $thumbHeight = null)
* @method \TelegramBot\Api\Types\InlineQueryResultVideo createInlineQueryResultVideo(string $type, string $id, string $videoUrl, string $mimeType, string $thumbUrl = null, string $title = null, string $caption = null, integer $videoWidth = null, integer $videoHeight = null, integer $videoDuration = null, string $description = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Types\InlineQueryResultVoice createInlineQueryResultVoice(string $type, string $id, string $voiceUrl, string $title, string $caption = null, integer $voiceDuration = null, \TelegramBot\Api\Types\InputTextMessageContent|\TelegramBot\Api\Types\InputLocationMessageContent|\TelegramBot\Api\Types\InputVenueMessageContent|\TelegramBot\Api\Types\InputContactMessageContent $inputMessageContent = null, \TelegramBot\Api\Types\InlineKeyboardMarkup $replyMarkup = null)
* @method \TelegramBot\Api\Types\InputTextMessageContent createInputTextMessageContent(string $messageText, string $parseMode = null, boolean $disableWebPagePreview = false)
* @method \TelegramBot\Api\Types\InputLocationMessageContent createInputLocationMessageContent(float $latitude, float $longitude, integer $livePeriod = null)
* @method \TelegramBot\Api\Types\InputVenueMessageContent createInputVenueMessageContent(float $latitude, float $longitude, string $title, string $address, string $foursquareId = null)
* @method \TelegramBot\Api\Types\InputContactMessageContent createInputContactMessageContent(string $phoneNumber, string $firstName, string $lastName = null)
* @method \TelegramBot\Api\Types\InputMediaPhoto createInputMediaPhoto(string $type, string $media, string $caption = null)
* @method \TelegramBot\Api\Types\InputMediaVideo createInputMediaVideo(string $type, string $media, string $caption = null, integer $width = null, integer $height = null, integer $duration = null)
*/
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
		'ReplyKeyboardMarkup' => [
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
		'KeyboardButton' => [
			'returnType' => [
				\TelegramBot\Api\Types\KeyboardButton::class,
			],
			'paramsMap' => [
				'text',
				'request_contact',
				'request_location',
			],
		],
		'ReplyKeyboardRemove' => [
			'returnType' => [
				\TelegramBot\Api\Types\ReplyKeyboardRemove::class,
			],
			'paramsMap' => [
				'remove_keyboard',
				'selective',
			],
		],
		'InlineKeyboardMarkup' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineKeyboardMarkup::class,
			],
			'paramsMap' => [
				'inline_keyboard',
			],
		],
		'InlineKeyboardButton' => [
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
		'ForceReply' => [
			'returnType' => [
				\TelegramBot\Api\Types\ForceReply::class,
			],
			'paramsMap' => [
				'force_reply',
				'selective',
			],
		],
		'InlineQueryResultArticle' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultArticle::class,
			],
			'paramsMap' => [
				'type',
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
			],
		],
		'InlineQueryResultAudio' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultAudio::class,
			],
			'paramsMap' => [
				'type',
				'id',
				'audio_url',
				'title',
				'caption',
				'performer',
				'audio_duration',
				'input_message_content',
				'reply_markup',
			],
		],
		'InlineQueryResultContact' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultContact::class,
			],
			'paramsMap' => [
				'type',
				'id',
				'phone_number',
				'first_name',
				'last_name',
				'thumb_url',
				'thumb_width',
				'thumb_height',
				'input_message_content',
				'reply_markup',
			],
		],
		'InlineQueryResultGame' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultGame::class,
			],
			'paramsMap' => [
				'type',
				'id',
				'title',
				'caption',
				'document_url',
				'mime_type',
				'description',
				'input_message_content',
				'reply_markup',
			],
		],
		'InlineQueryResultDocument' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultDocument::class,
			],
			'paramsMap' => [
				'type',
				'id',
				'game_short_name',
				'reply_markup',
			],
		],
		'InlineQueryResultGif' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultGif::class,
			],
			'paramsMap' => [
				'type',
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
			],
		],
		'InlineQueryResultLocation' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultLocation::class,
			],
			'paramsMap' => [
				'type',
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
			],
		],
		'InlineQueryResultMpeg4Gif' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultMpeg4Gif::class,
			],
			'paramsMap' => [
				'type',
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
			],
		],
		'InlineQueryResultPhoto' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultPhoto::class,
			],
			'paramsMap' => [
				'type',
				'id',
				'photo_url',
				'thumb_url',
				'photo_width',
				'photo_height',
				'title',
				'caption',
				'reply_markup',
				'input_message_content',
			],
		],
		'InlineQueryResultVenue' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultVenue::class,
			],
			'paramsMap' => [
				'type',
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
			],
		],
		'InlineQueryResultVideo' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultVideo::class,
			],
			'paramsMap' => [
				'type',
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
			],
		],
		'InlineQueryResultVoice' => [
			'returnType' => [
				\TelegramBot\Api\Types\InlineQueryResultVoice::class,
			],
			'paramsMap' => [
				'type',
				'id',
				'voice_url',
				'title',
				'caption',
				'voice_duration',
				'input_message_content',
				'reply_markup',
			],
		],
		'InputTextMessageContent' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputTextMessageContent::class,
			],
			'paramsMap' => [
				'message_text',
				'parse_mode',
				'disable_web_page_preview',
			],
		],
		'InputLocationMessageContent' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputLocationMessageContent::class,
			],
			'paramsMap' => [
				'latitude',
				'longitude',
				'live_period',
			],
		],
		'InputVenueMessageContent' => [
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
		'InputContactMessageContent' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputContactMessageContent::class,
			],
			'paramsMap' => [
				'phone_number',
				'first_name',
				'last_name',
			],
		],
		'InputMediaPhoto' => [
			'returnType' => [
				\TelegramBot\Api\Types\InputMediaPhoto::class,
			],
			'paramsMap' => [
				'type',
				'media',
				'caption',
			],
		],
		'InputMediaVideo' => [
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
}
