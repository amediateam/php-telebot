<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\GameHighScore setPosition(integer $position)
 * @method integer getPosition()
 * @method \TelegramBot\Api\Types\GameHighScore setUser(\TelegramBot\Api\Types\User $user)
 * @method \TelegramBot\Api\Types\User getUser()
 * @method \TelegramBot\Api\Types\GameHighScore setScore(integer $score)
 * @method integer getScore()
*/
class GameHighScore extends BaseType implements TypeInterface
{
public static $name = 'GameHighScore';
	static protected $requiredParams = [
		'position',
		'user',
		'score'
	];
	static protected $map = [
		'position' => 'integer',
		'user' => \TelegramBot\Api\Types\User::class,
		'score' => 'integer',
	];
	static protected $defaultData = [
	];
}
