<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\InvalidArgumentException;
use TelegramBot\Api\Types\InlineQueryResultArticle;
use TelegramBot\Api\Types\InlineQueryResultAudio;
use TelegramBot\Api\Types\InlineQueryResultCachedAudio;
use TelegramBot\Api\Types\InlineQueryResultCachedDocument;
use TelegramBot\Api\Types\InlineQueryResultCachedGif;
use TelegramBot\Api\Types\InlineQueryResultCachedMpeg4Gif;
use TelegramBot\Api\Types\InlineQueryResultCachedPhoto;
use TelegramBot\Api\Types\InlineQueryResultCachedSticker;
use TelegramBot\Api\Types\InlineQueryResultCachedVideo;
use TelegramBot\Api\Types\InlineQueryResultCachedVoice;
use TelegramBot\Api\Types\InlineQueryResultContact;
use TelegramBot\Api\Types\InlineQueryResultDocument;
use TelegramBot\Api\Types\InlineQueryResultGame;
use TelegramBot\Api\Types\InlineQueryResultGif;
use TelegramBot\Api\Types\InlineQueryResultLocation;
use TelegramBot\Api\Types\InlineQueryResultPhoto;
use TelegramBot\Api\Types\InlineQueryResultVenue;
use TelegramBot\Api\Types\InlineQueryResultVideo;
use TelegramBot\Api\Types\InlineQueryResultVoice;

abstract class ArrayOfInlineQueryResult
{
    private static function isInlineQueryResultType($inlineQueryItem)
    {
        if ($inlineQueryItem instanceof InlineQueryResultArticle) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultAudio) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultContact) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultGame) {
            return true;
        }  else if ($inlineQueryItem instanceof InlineQueryResultDocument) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultGif) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultLocation) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultPhoto) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultVenue) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultVideo) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultVoice) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedAudio) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedDocument) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedGif) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedMpeg4Gif) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedPhoto) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedSticker) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedVideo) {
            return true;
        } else if ($inlineQueryItem instanceof InlineQueryResultCachedVoice) {
            return true;
        }
        return false;
    }


    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfInlineQueryResult = [];
        foreach ($data as $inlineQueryItem) {
            if (self::isInlineQueryResultType($inlineQueryItem)) {
                $arrayOfInlineQueryResult[] = $inlineQueryItem;
            }
        }
        return $arrayOfInlineQueryResult;
    }


    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                $result = self::isInlineQueryResultType($item);
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
