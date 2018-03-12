<?php

namespace TelegramBot\Api;

use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\Audio;
use TelegramBot\Api\Types\CallbackQuery;
use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\ChosenInlineResult;
use TelegramBot\Api\Types\Contact;
use TelegramBot\Api\Types\Document;
use TelegramBot\Api\Types\Game;
use TelegramBot\Api\Types\InlineQuery;
use TelegramBot\Api\Types\Invoice;
use TelegramBot\Api\Types\Location;
use TelegramBot\Api\Types\Message;
use TelegramBot\Api\Types\PreCheckoutQuery;
use TelegramBot\Api\Types\ShippingQuery;
use TelegramBot\Api\Types\Sticker;
use TelegramBot\Api\Types\SuccessfulPayment;
use TelegramBot\Api\Types\Update;
use TelegramBot\Api\Types\User;
use TelegramBot\Api\Types\Venue;
use TelegramBot\Api\Types\Video;
use TelegramBot\Api\Types\Voice;

class Filters
{
    public static function all()
    {
        return function () {
            return true;
        };
    }

    public static function message($require = true)
    {
        return function (Update $update) use ($require) {
            $result = $update->getEffectiveMessage() instanceof Message;
            return $result == $require;
        };
    }

    public static function inlineQuery($require = true)
    {
        return function (Update $update) use ($require) {
            $result = $update->getInlineQuery() instanceof InlineQuery;

            return $result == $require;
        };
    }

    public static function game($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && $update->getEffectiveMessage()->getGame() instanceof Game);
        };
    }

    public static function migrate($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && (
                        !empty($update->getEffectiveMessage()->getMigrateFromChatId()) ||
                        !empty($update->getEffectiveMessage()->getMigrateToChatId())
                    ));
        };
    }

    public static function pinnedMessage($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && $update->getEffectiveMessage()->getPinnedMessage() instanceof Message);
        };
    }

    public static function newChatPhoto($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && sizeof($update->getEffectiveMessage()->getNewChatPhoto()));
        };
    }

    public static function newChatMembers($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && sizeof($update->getEffectiveMessage()->getNewChatMembers()));
        };
    }

    public static function leftChatMember($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && $update->getEffectiveMessage()->getLeftChatMember() instanceof User);
        };
    }

    public static function newChatTitle($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && !empty($update->getEffectiveMessage()->getNewChatTitle()));
        };
    }

    public static function chatCreated($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && (
                        false !== (bool)$update->getEffectiveMessage()->getChannelChatCreated() ||
                        false !== (bool)$update->getEffectiveMessage()->getGroupChatCreated() ||
                        false !== (bool)$update->getEffectiveMessage()->getSupergroupChatCreated()
                    ));
        };
    }

    public static function deleteChatPhoto($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && false !== (bool)$update->getEffectiveMessage()->getDeleteChatPhoto());
        };
    }

    public static function statusUpdate($require = true)
    {
        return function (Update $update) use ($require) {
            $result = false;
            if (!self::message()($update)) return $require == $result;
            $types = [
                self::newChatMembers(),
                self::leftChatMember(),
                self::migrate(),
                self::chatCreated(),
                self::newChatPhoto(),
                self::newChatTitle(),
            ];
            foreach ($types as $callback) {
                if ($callback($update)) {
                    $result = true;
                    break;
                }
            }
            return $result == $require;
        };
    }

    public static function forwarded($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (
                    self::message()($update) &&
                    $update->getEffectiveMessage()->getForwardFromChat() instanceof Chat
                );
        };
    }


    public static function chosenInlineResult($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getChosenInlineResult() instanceof ChosenInlineResult);
        };
    }

    public static function successfulPayment($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (
                    self::message()($update) &&
                    $update->getEffectiveMessage()->getSuccessfulPayment() instanceof SuccessfulPayment
                );
        };
    }

    public static function shippingQuery($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getShippingQuery() instanceof ShippingQuery);
        };
    }

    public static function preCheckoutQuery($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getPreCheckoutQuery() instanceof PreCheckoutQuery);
        };
    }

    public static function callbackQuery($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getCallbackQuery() instanceof CallbackQuery);
        };
    }

    public static function text($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && !empty($update->getEffectiveMessage()->getText()));
        };
    }

    public static function command($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::text()($update) && substr($update->getEffectiveMessage()->getText(), 0, 1) == '/');
        };
    }

    public static function voice($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getVoice() instanceof Voice);
        };
    }

    public static function sticker($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getSticker() instanceof Sticker);
        };
    }

    public static function audio($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getAudio() instanceof Audio);
        };
    }

    public static function photo($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && sizeof($update->getEffectiveMessage()->getPhoto()));
        };
    }

    public static function invoice($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getInvoice() instanceof Invoice);
        };
    }

    public static function document($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getDocument() instanceof Document);
        };
    }

    public static function video($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getVideo() instanceof Video);
        };
    }

    public static function contact($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getContact() instanceof Contact);
        };
    }

    public static function location($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getLocation() instanceof Location);
        };
    }

    public static function venue($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getVenue() instanceof Venue);
        };
    }

    public static function reply($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && $update->getEffectiveMessage()->getReplyToMessage() instanceof Message);
        };
    }

    public static function private($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && $update->getEffectiveChat()->getType() == Chat::TYPE_PRIVATE);
        };
    }

    public static function group($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    (
                        $update->getEffectiveChat()->getType() == Chat::TYPE_SUPER_GROUP ||
                        $update->getEffectiveChat()->getType() == Chat::TYPE_GROUP
                    ));
        };
    }


    public static function entity($entity, $require = true)
    {
        return function (Update $update) use ($entity, $require) {
            $result = false;
            if (!self::message()($update)) return $require == $result;
            foreach ($update->getEffectiveMessage()->getEntities() as $e) {
                if ($e['type'] == $entity) {
                    $result = true;
                    break;
                }
            }
            foreach ($update->getEffectiveMessage()->getCaptionEntities() as $e) {
                if ($e['type'] == $entity) {
                    $result = true;
                    break;
                }
            }
            return $require == $result;
        };
    }

    /**
     * @param Update $update
     * @param null $userId
     * @param null $username
     * @throws InvalidArgumentException
     */
    public static function user($userId = null, $username = null, $require = true)
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

        return function (Update $update) use ($userArray, $usernameArray, $require) {
            $result = false;
            if (!self::message()($update)) return $result == $require;
            if (in_array($update->getEffectiveMessage()->getFrom()->getUsername(), $usernameArray) ||
                in_array($update->getEffectiveMessage()->getFrom()->getId(), $userArray)) {
                $result = true;
            }
            return $result == $require;
        };
    }

    /**
     * @param Update $update
     * @param null $chatId
     * @param null $username
     * @throws InvalidArgumentException
     */
    public static function chat($chatId = null, $username = null, $require = true)
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

        return function (Update $update) use ($chatArray, $usernameArray, $require) {
            $result = false;
            if (!self::message()($update)) return $result == $require;
            if (in_array($update->getEffectiveMessage()->getChat()->getUsername(), $usernameArray) ||
                in_array($update->getEffectiveMessage()->getChat()->getId(), $chatArray)) {
                $result = true;
            }
            return $result == $require;
        };
    }

    public static function filter(Update $update, array $filters = null)
    {
        if ($filters == null) {
            return true;
        }
        foreach ($filters as $filter) {
            if (is_array($filter)) {
                $result = self::filter($update, $filter);
                if (!$result) return false;
            } else {
                if (!$filter($update)) {
                    return false;
                }
            }
        }
        return true;
    }
}