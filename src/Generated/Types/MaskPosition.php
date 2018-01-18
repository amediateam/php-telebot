<?php
namespace TelegramBot\Api\Generated\Types;
use TelegramBot\Api\BaseType;
use TelegramBot\Api\TypeInterface;
/**
 * @method \TelegramBot\Api\Types\MaskPosition setPoint(string $point)
 * @method string getPoint()
 * @method \TelegramBot\Api\Types\MaskPosition setXShift(float $xShift)
 * @method float getXShift()
 * @method \TelegramBot\Api\Types\MaskPosition setYShift(float $yShift)
 * @method float getYShift()
 * @method \TelegramBot\Api\Types\MaskPosition setScale(float $scale)
 * @method float getScale()
*/
class MaskPosition extends BaseType implements TypeInterface
{
public static $name = 'MaskPosition';
	static protected $requiredParams = [
		'point',
		'x_shift',
		'y_shift',
		'scale'
	];
	static protected $map = [
		'point' => 'string',
		'x_shift' => 'float',
		'y_shift' => 'float',
		'scale' => 'float',
	];
	static protected $defaultData = [
	];
}
