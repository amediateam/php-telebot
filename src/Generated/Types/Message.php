<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Message setMessageId(integer $messageId)
 * @method integer getMessageId()
 * @method \TelegramBot\Api\Types\Message setFrom(\TelegramBot\Api\Types\User $from)
 * @method \TelegramBot\Api\Types\User getFrom()
 * @method \TelegramBot\Api\Types\Message setDate(integer $date)
 * @method integer getDate()
 * @method \TelegramBot\Api\Types\Message setChat(\TelegramBot\Api\Types\Chat $chat)
 * @method \TelegramBot\Api\Types\Chat getChat()
 * @method \TelegramBot\Api\Types\Message setForwardFrom(\TelegramBot\Api\Types\User $forwardFrom)
 * @method \TelegramBot\Api\Types\User getForwardFrom()
 * @method \TelegramBot\Api\Types\Message setForwardFromChat(\TelegramBot\Api\Types\Chat $forwardFromChat)
 * @method \TelegramBot\Api\Types\Chat getForwardFromChat()
 * @method \TelegramBot\Api\Types\Message setForwardFromMessageId(integer $forwardFromMessageId)
 * @method integer getForwardFromMessageId()
 * @method \TelegramBot\Api\Types\Message setForwardSignature(string $forwardSignature)
 * @method string getForwardSignature()
 * @method \TelegramBot\Api\Types\Message setForwardDate(integer $forwardDate)
 * @method integer getForwardDate()
 * @method \TelegramBot\Api\Types\Message setReplyToMessage(\TelegramBot\Api\Types\Message $replyToMessage)
 * @method \TelegramBot\Api\Types\Message getReplyToMessage()
 * @method \TelegramBot\Api\Types\Message setEditDate(integer $editDate)
 * @method integer getEditDate()
 * @method \TelegramBot\Api\Types\Message setMediaGroupId(string $mediaGroupId)
 * @method string getMediaGroupId()
 * @method \TelegramBot\Api\Types\Message setAuthorSignature(string $authorSignature)
 * @method string getAuthorSignature()
 * @method \TelegramBot\Api\Types\Message setText(string $text)
 * @method string getText()
 * @method \TelegramBot\Api\Types\Message setEntities(\TelegramBot\Api\Types\MessageEntity[] $entities)
 * @method \TelegramBot\Api\Types\MessageEntity[] getEntities()
 * @method \TelegramBot\Api\Types\Message setCaptionEntities(\TelegramBot\Api\Types\MessageEntity[] $captionEntities)
 * @method \TelegramBot\Api\Types\MessageEntity[] getCaptionEntities()
 * @method \TelegramBot\Api\Types\Message setAudio(\TelegramBot\Api\Types\Audio $audio)
 * @method \TelegramBot\Api\Types\Audio getAudio()
 * @method \TelegramBot\Api\Types\Message setDocument(\TelegramBot\Api\Types\Document $document)
 * @method \TelegramBot\Api\Types\Document getDocument()
 * @method \TelegramBot\Api\Types\Message setGame(\TelegramBot\Api\Types\Game $game)
 * @method \TelegramBot\Api\Types\Game getGame()
 * @method \TelegramBot\Api\Types\Message setPhoto(\TelegramBot\Api\Types\PhotoSize[] $photo)
 * @method \TelegramBot\Api\Types\PhotoSize[] getPhoto()
 * @method \TelegramBot\Api\Types\Message setSticker(\TelegramBot\Api\Types\Sticker $sticker)
 * @method \TelegramBot\Api\Types\Sticker getSticker()
 * @method \TelegramBot\Api\Types\Message setVideo(\TelegramBot\Api\Types\Video $video)
 * @method \TelegramBot\Api\Types\Video getVideo()
 * @method \TelegramBot\Api\Types\Message setVoice(\TelegramBot\Api\Types\Voice $voice)
 * @method \TelegramBot\Api\Types\Voice getVoice()
 * @method \TelegramBot\Api\Types\Message setVideoNote(\TelegramBot\Api\Types\VideoNote $videoNote)
 * @method \TelegramBot\Api\Types\VideoNote getVideoNote()
 * @method \TelegramBot\Api\Types\Message setCaption(string $caption)
 * @method string getCaption()
 * @method \TelegramBot\Api\Types\Message setContact(\TelegramBot\Api\Types\Contact $contact)
 * @method \TelegramBot\Api\Types\Contact getContact()
 * @method \TelegramBot\Api\Types\Message setLocation(\TelegramBot\Api\Types\Location $location)
 * @method \TelegramBot\Api\Types\Location getLocation()
 * @method \TelegramBot\Api\Types\Message setVenue(\TelegramBot\Api\Types\Venue $venue)
 * @method \TelegramBot\Api\Types\Venue getVenue()
 * @method \TelegramBot\Api\Types\Message setNewChatMembers(\TelegramBot\Api\Types\User[] $newChatMembers)
 * @method \TelegramBot\Api\Types\User[] getNewChatMembers()
 * @method \TelegramBot\Api\Types\Message setLeftChatMember(\TelegramBot\Api\Types\User $leftChatMember)
 * @method \TelegramBot\Api\Types\User getLeftChatMember()
 * @method \TelegramBot\Api\Types\Message setNewChatTitle(string $newChatTitle)
 * @method string getNewChatTitle()
 * @method \TelegramBot\Api\Types\Message setNewChatPhoto(\TelegramBot\Api\Types\PhotoSize[] $newChatPhoto)
 * @method \TelegramBot\Api\Types\PhotoSize[] getNewChatPhoto()
 * @method \TelegramBot\Api\Types\Message setDeleteChatPhoto(boolean $deleteChatPhoto)
 * @method boolean getDeleteChatPhoto()
 * @method \TelegramBot\Api\Types\Message setGroupChatCreated(boolean $groupChatCreated)
 * @method boolean getGroupChatCreated()
 * @method \TelegramBot\Api\Types\Message setSupergroupChatCreated(boolean $supergroupChatCreated)
 * @method boolean getSupergroupChatCreated()
 * @method \TelegramBot\Api\Types\Message setChannelChatCreated(boolean $channelChatCreated)
 * @method boolean getChannelChatCreated()
 * @method \TelegramBot\Api\Types\Message setMigrateToChatId(integer $migrateToChatId)
 * @method integer getMigrateToChatId()
 * @method \TelegramBot\Api\Types\Message setMigrateFromChatId(integer $migrateFromChatId)
 * @method integer getMigrateFromChatId()
 * @method \TelegramBot\Api\Types\Message setPinnedMessage(\TelegramBot\Api\Types\Message $pinnedMessage)
 * @method \TelegramBot\Api\Types\Message getPinnedMessage()
 * @method \TelegramBot\Api\Types\Message setInvoice(\TelegramBot\Api\Types\Invoice $invoice)
 * @method \TelegramBot\Api\Types\Invoice getInvoice()
 * @method \TelegramBot\Api\Types\Message setSuccessfulPayment(\TelegramBot\Api\Types\SuccessfulPayment $successfulPayment)
 * @method \TelegramBot\Api\Types\SuccessfulPayment getSuccessfulPayment()
*/
class Message extends BaseType implements TypeInterface
{
public static $name = 'Message';
	static protected $requiredParams = [
		'message_id'
	];
	static protected $map = [
		'message_id' => 'integer',
		'from' => \TelegramBot\Api\Types\User::class,
		'date' => 'integer',
		'chat' => \TelegramBot\Api\Types\Chat::class,
		'forward_from' => \TelegramBot\Api\Types\User::class,
		'forward_from_chat' => \TelegramBot\Api\Types\Chat::class,
		'forward_from_message_id' => 'integer',
		'forward_signature' => 'string',
		'forward_date' => 'integer',
		'reply_to_message' => \TelegramBot\Api\Types\Message::class,
		'edit_date' => 'integer',
		'media_group_id' => 'string',
		'author_signature' => 'string',
		'text' => 'string',
		'entities' => \TelegramBot\Api\Iterators\ArrayOfMessageEntity::class,
		'caption_entities' => \TelegramBot\Api\Iterators\ArrayOfMessageEntity::class,
		'audio' => \TelegramBot\Api\Types\Audio::class,
		'document' => \TelegramBot\Api\Types\Document::class,
		'game' => \TelegramBot\Api\Types\Game::class,
		'photo' => \TelegramBot\Api\Iterators\ArrayOfPhotoSize::class,
		'sticker' => \TelegramBot\Api\Types\Sticker::class,
		'video' => \TelegramBot\Api\Types\Video::class,
		'voice' => \TelegramBot\Api\Types\Voice::class,
		'video_note' => \TelegramBot\Api\Types\VideoNote::class,
		'caption' => 'string',
		'contact' => \TelegramBot\Api\Types\Contact::class,
		'location' => \TelegramBot\Api\Types\Location::class,
		'venue' => \TelegramBot\Api\Types\Venue::class,
		'new_chat_members' => \TelegramBot\Api\Iterators\ArrayOfUser::class,
		'left_chat_member' => \TelegramBot\Api\Types\User::class,
		'new_chat_title' => 'string',
		'new_chat_photo' => \TelegramBot\Api\Iterators\ArrayOfPhotoSize::class,
		'delete_chat_photo' => 'boolean',
		'group_chat_created' => 'boolean',
		'supergroup_chat_created' => 'boolean',
		'channel_chat_created' => 'boolean',
		'migrate_to_chat_id' => 'integer',
		'migrate_from_chat_id' => 'integer',
		'pinned_message' => \TelegramBot\Api\Types\Message::class,
		'invoice' => \TelegramBot\Api\Types\Invoice::class,
		'successful_payment' => \TelegramBot\Api\Types\SuccessfulPayment::class,
	];
	static protected $defaultData = [
	];
}
