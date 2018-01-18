<?php
namespace TelegramBot\Api;

use TelegramBot\Api\Exceptions\InvalidArgumentException;
use TelegramBot\Api\Types\Chat;
use TelegramBot\Api\Types\Update;

class Filters
{
    public static $text = FilterText::class;
    public static $command = FilterCommand::class;

    public static function all()
    {
        return function () {
            return true;
        };
    }

    public static function message($require = true)
    {
        return function (Update $update) use ($require) {
            $result = $update->getEffectiveMessage() !== false;
            return $result == $require;
        };
    }

    public static function inlineQuery($require = true)
    {
        return function (Update $update) use ($require) {
            $result = $update->getInlineQuery() !== false;

            return $result == $require;
        };
    }

    public static function game($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && $update->getEffectiveMessage()->getGame() != false);
        };
    }

    public static function migrate($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && (
                        false !== $update->getEffectiveMessage()->getMigrateFromChatId() ||
                        false !== $update->getEffectiveMessage()->getMigrateToChatId()
                    ));
        };
    }

    public static function pinnedMessage($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && false !== (bool)$update->getEffectiveMessage()->getPinnedMessage());
        };
    }

    public static function newChatPhoto($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && false !== (bool)$update->getEffectiveMessage()->getNewChatPhoto());
        };
    }

    public static function newChatMembers($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && false !== (bool)$update->getEffectiveMessage()->getNewChatMembers());
        };
    }

    public static function leftChatMember($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && false !== (bool)$update->getEffectiveMessage()->getLeftChatMember());
        };
    }

    public static function newChatTitle($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) && false !== (bool)$update->getEffectiveMessage()->getNewChatTitle());
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
                    false !== $update->getEffectiveMessage()->getForwardDate()
                );
        };
    }


    public static function chosenInlineResult($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getChosenInlineResult() !== false);
        };
    }

    public static function successfulPayment($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (
                    self::message()($update) &&
                    $update->getEffectiveMessage()->getSuccessfulPayment() !== false
                );
        };
    }

    public static function shippingQuery($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getShippingQuery() !== false);
        };
    }

    public static function preCheckoutQuery($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getPreCheckoutQuery() !== false);
        };
    }

    public static function callbackQuery($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == ($update->getCallbackQuery() !== false);
        };
    }

    public static function text($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getText() !== false &&
                    !empty($update->getEffectiveMessage()->getText()));
        };
    }

    public static function command($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getText() !== false &&
                    substr($update->getEffectiveMessage()->getText(), 0, 1) == '/');
        };
    }

    public static function voice($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getVoice() !== false);
        };
    }

    public static function sticker($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getSticker() !== false);
        };
    }

    public static function audio($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getAudio() !== false);
        };
    }

    public static function photo($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getPhoto() !== false);
        };
    }

    public static function invoice($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getInvoice() !== false);
        };
    }

    public static function document($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getDocument() !== false);
        };
    }

    public static function video($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getVideo() !== false);
        };
    }

    public static function contact($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getContact() !== false);
        };
    }

    public static function location($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getLocation() !== false);
        };
    }

    public static function venue($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getVenue() !== false);
        };
    }

    public static function reply($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    false != $update->getEffectiveMessage()->getReplyToMessage());
        };
    }

    public static function private($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    $update->getEffectiveMessage()->getChat()->getType() == Chat::TYPE_PRIVATE);
        };
    }

    public static function group($require = true)
    {
        return function (Update $update) use ($require) {
            return $require == (self::message()($update) &&
                    (
                        $update->getEffectiveMessage()->getChat()->getType() == Chat::TYPE_SUPER_GROUP ||
                        $update->getEffectiveMessage()->getChat()->getType() == Chat::TYPE_GROUP
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