<?php

namespace TelegramBot\Api\Filters;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\Update;

class Filters
{
    public static $all = 0;
    public static $message = FilterMessage::class;
    public static $text = FilterText::class;
    public static $voice = FilterVoice::class;
    public static $audio = FilterAudio::class;
    public static $photo = FilterPhoto::class;
    public static $video = FilterVideo::class;
    public static $document = FilterDocument::class;
    public static $command = FilterCommand::class;
    public static $reply = FilterReply::class;
    public static $notReply = FilterNotReply::class;
    public static $sticker = FilterSticker::class;
    public static $contact = FilterContact::class;
    public static $venue = FilterVenue::class;
    public static $private = FilterChatPrivate::class;
    public static $notPrivate = FilterChatNotPrivate::class;
    public static $group = FilterChatGroup::class;
    public static $location = FilterLocation::class;
    public static $newChatMembers = FilterNewChatMembers::class;
    public static $leftChatMember = FilterLeftChatMember::class;
    public static $newChatTitle = FilterNewChatTitle::class;
    public static $newChatPhoto = FilterNewChatPhoto::class;
    public static $deleteChatPhoto = FilterDeleteChatPhoto::class;
    public static $chatCreated = FilterChatCreated::class;
    public static $migrate = FilterMigrate::class;
    public static $pinnedMessage = FilterPinnedMessage::class;
    public static $statusUpdate = FilterStatusUpdate::class;
    public static $notStatusUpdate = FilterNotStatusUpdate::class;
    public static $forwarded = FilterForwarded::class;
    public static $notForwarded = FilterNotForwarded::class;
    public static $game = FilterGame::class;
    public static $successfulPayment = FilterSuccessfulPayment::class;
    public static $invoice = FilterInvoice::class;
    public static $inlineQuery = FilterInlineQuery::class;
    public static $chosenInlineResult = FilterChosenInlineResult::class;
    public static $callbackQuery = FilterCallbackQuery::class;
    public static $preCheckoutQuery = FilterPreCheckoutQuery::class;

    public function entity(Update $update, $entity)
    {
        return FilterMessageEntity::filter($update, $entity);
    }

    /**
     * @param Update $update
     * @param null $userId
     * @param null $username
     * @return bool
     * @throws InvalidArgumentException
     */
    public function user(Update $update, $userId = null, $username = null)
    {
        if ((is_null($userId) && is_null($username)) || (!is_null($userId) && !is_null($username))) {
            throw new InvalidArgumentException("You need to specify one of username or userId from user filter.");
        }
        $userArray = is_array($userId) ? $userId : [$userId];
        $usernameArray = is_array($username) ? $username : [$username];

        $userArray = array_map('intval', $userArray);
        $usernameArray = array_map(function ($x) {
            return str_replace('@', '', $x);
        }, $usernameArray);

        if (FilterMessage::filter($update)) {
            return
                in_array($update->getEffectiveMessage()->getFrom()->getUsername(), $usernameArray) ||
                in_array($update->getEffectiveMessage()->getFrom()->getId(), $userArray);
        }
        return false;
    }

    /**
     * @param Update $update
     * @param null $chatId
     * @param null $username
     * @return bool
     * @throws InvalidArgumentException
     */
    public function chat(Update $update, $chatId = null, $username = null)
    {
        if ((is_null($chatId) && is_null($username)) || (!is_null($chatId) && !is_null($username))) {
            throw new InvalidArgumentException("You need to specify one of username or chatId from chat filter.");
        }
        $chatArray = is_array($chatId) ? $chatId : [$chatId];
        $usernameArray = is_array($username) ? $username : [$username];

        $chatArray = array_map('intval', $chatArray);
        $usernameArray = array_map(function ($x) {
            return str_replace('@', '', $x);
        }, $usernameArray);

        if (FilterMessage::filter($update)) {
            return
                in_array($update->getEffectiveMessage()->getChat()->getUsername(), $usernameArray) ||
                in_array($update->getEffectiveMessage()->getChat()->getId(), $chatArray);
        }
        return false;
    }

    public static function filter($update, array $filters = null)
    {
        if ($filters == null) {
            return true;
        }
        foreach ($filters as $filter) {
            if (is_array($filter)) {
                $result = false;
                foreach ($filter as $subFilter) {
                    if ($subFilter::filter($update)) {
                        $result = true;
                        break;
                    }
                }
                if (!$result) return false;
            } else {
                if (!$filter::filter($update)) {
                    return false;
                }
            }
        }
        return true;
    }
}