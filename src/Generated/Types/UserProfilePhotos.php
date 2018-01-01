<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\UserProfilePhotos setTotalCount(\TelegramBot\Api\Types\Location $totalCount)
 * @method \TelegramBot\Api\Types\Location getTotalCount()
 * @method \TelegramBot\Api\Types\UserProfilePhotos setPhotos(\TelegramBot\Api\Types\ArrayOfPhotoSize[] $photos)
 * @method \TelegramBot\Api\Types\ArrayOfPhotoSize[] getPhotos()
*/
class UserProfilePhotos extends BaseType implements TypeInterface
{
	static protected $requiredParams = [
		'total_count',
		'photos'
	];
	static protected $map = [
		'total_count' => \TelegramBot\Api\Types\Location::class,
		'photos' => \TelegramBot\Api\Iterators\ArrayOfArrayOfPhotoSize::class,
	];
	static protected $defaultData = [
	];
}
