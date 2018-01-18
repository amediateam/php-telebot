<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\Game setTitle(string $title)
 * @method string getTitle()
 * @method \TelegramBot\Api\Types\Game setDescription(string $description)
 * @method string getDescription()
 * @method \TelegramBot\Api\Types\Game setPhoto(\TelegramBot\Api\Types\PhotoSize[] $photo)
 * @method \TelegramBot\Api\Types\PhotoSize[] getPhoto()
 * @method \TelegramBot\Api\Types\Game setText(string $text)
 * @method string getText()
 * @method \TelegramBot\Api\Types\Game setTextEntities(\TelegramBot\Api\Types\MessageEntity[] $textEntities)
 * @method \TelegramBot\Api\Types\MessageEntity[] getTextEntities()
 * @method \TelegramBot\Api\Types\Game setAnimation(\TelegramBot\Api\Types\Animation $animation)
 * @method \TelegramBot\Api\Types\Animation getAnimation()
*/
class Game extends BaseType implements TypeInterface
{
public static $name = 'Game';
	static protected $requiredParams = [
		'title',
		'description',
		'photo'
	];
	static protected $map = [
		'title' => 'string',
		'description' => 'string',
		'photo' => \TelegramBot\Api\Iterators\ArrayOfPhotoSize::class,
		'text' => 'string',
		'text_entities' => \TelegramBot\Api\Iterators\ArrayOfMessageEntity::class,
		'animation' => \TelegramBot\Api\Types\Animation::class,
	];
	static protected $defaultData = [
	];
}
