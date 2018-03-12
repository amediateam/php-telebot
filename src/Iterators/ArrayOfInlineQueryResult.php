<?php

namespace TelegramBot\Api\Iterators;

use TelegramBot\Api\BaseType;
use TelegramBot\Api\BotApi;
use TelegramBot\Api\Exceptions\InvalidArgumentException;
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
use TelegramBot\Api\Types\InlineQueryResultMpeg4Gif;
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
        } else if ($inlineQueryItem instanceof InlineQueryResultDocument) {
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

    /**
     * @param BotApi $bot
     * @param $data
     * @return array
     * @throws InvalidArgumentException
     */
    public static function fromResponse(BotApi $bot, $data)
    {
        $arrayOfInlineQueryResult = [];
        foreach ($data as $inlineQueryItem) {
            if (self::processByType($inlineQueryItem)) {
                $arrayOfInlineQueryResult[] = $inlineQueryItem;
            } else {
                $arrayOfInlineQueryResult[] = self::processByType($inlineQueryItem, false, $bot);
            }
        }
        return $arrayOfInlineQueryResult;
    }


    /**
     * @param $inlineQueryItem
     * @param bool $validate
     * @param BotApi|null $bot
     * @return bool|static
     * @throws InvalidArgumentException
     */
    private static function processByType($inlineQueryItem, $validate = false, BotApi $bot = null)
    {
        if ($validate && self::isInlineQueryResultType($inlineQueryItem)) return true;
        $class = null;
        switch ($inlineQueryItem['type']) {
            case 'article':
                $class = InlineQueryResultArticle::class;
                break;
            case 'audio':
                if (isset($data['audio_file_id'])) {
                    $class = InlineQueryResultCachedAudio::class;
                    break;
                }
                $class = InlineQueryResultAudio::class;
                break;
            case 'photo':
                if (isset($data['photo_file_id'])) {
                    $class = InlineQueryResultCachedPhoto::class;
                    break;
                }
                $class = InlineQueryResultPhoto::class;
                break;
            case 'gif':
                if (isset($data['gif_file_id'])) {
                    $class = InlineQueryResultCachedGif::class;
                    break;
                }
                $class = InlineQueryResultGif::class;
                break;
            case 'mpeg4_gif':
                if (isset($data['mpeg4_file_id'])) {
                    $class = InlineQueryResultCachedMpeg4Gif::class;
                    break;
                }
                $class = InlineQueryResultMpeg4Gif::class;
                break;
            case 'voice':
                if (isset($data['voice_file_id'])) {
                    $class = InlineQueryResultCachedVoice::class;
                    break;
                }
                $class = InlineQueryResultVoice::class;
                break;
            case 'sticker':
                $class = InlineQueryResultCachedSticker::class;
                break;
            case 'video':
                if (isset($data['video_file_id'])) {
                    $class = InlineQueryResultCachedVideo::class;
                    break;
                }
                $class = InlineQueryResultVideo::class;
                break;
            case 'document':
                if (isset($data['document_file_id'])) {
                    $class = InlineQueryResultCachedDocument::class;
                    break;
                }
                $class = InlineQueryResultDocument::class;
                break;
            case 'location':
                $class = InlineQueryResultLocation::class;
                break;
            case 'contact':
                $class = InlineQueryResultContact::class;
                break;
            case 'game':
                $class = InlineQueryResultGame::class;
                break;
            case 'venue':
                $class = InlineQueryResultVenue::class;
                break;
        }
        if (is_null($class)) {
            /** @var $class BaseType */
            return $validate ? false : $class::fromResponse($bot, $inlineQueryItem);
        }
        /** @var $class BaseType */
        return $validate ? $class::validate($inlineQueryItem) : $class::fromResponse($bot, $inlineQueryItem);
    }


    public static function validate($data)
    {
        foreach ($data as $item) {
            try {
                if ($item instanceof BaseType) {
                    $result = self::isInlineQueryResultType($item);
                } else {
                    $result = self::processByType($item, true);
                }
            } catch (InvalidArgumentException $e) {
                $result = false;
            }
            if (!$result) return false;
        }
        return true;
    }
}
