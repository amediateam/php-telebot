<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\StickerSet setName(string $name)
 * @method string getName()
 * @method \TelegramBot\Api\Types\StickerSet setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\StickerSet setContainsMasks(boolean $containsMasks)
 * @method boolean getContainsMasks()
 * @method \TelegramBot\Api\Types\StickerSet setStickers(\TelegramBot\Api\Types\Sticker[] $stickers)
 * @method \TelegramBot\Api\Types\Sticker[] getStickers()
*/
class StickerSet extends BaseType implements TypeInterface
{
public static $name = 'StickerSet';
	static protected $requiredParams = [
		'name',
		'title',
		'contains_masks',
		'stickers'
	];
	static protected $map = [
		'name' => 'string',
		'title' => 'string',
		'contains_masks' => 'boolean',
		'stickers' => \TelegramBot\Api\Iterators\ArrayOfSticker::class,
	];
	static protected $defaultData = [
	];
}
