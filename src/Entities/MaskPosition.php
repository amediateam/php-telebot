<?php

namespace TelegramBot\Api\Entities;
class MaskPosition extends BaseEntity
{
    /** @var string */
    protected $point;
    /** @var float */
    protected $x_shift;
    /** @var float */
    protected $y_shift;
    /** @var float */
    protected $scale;

    public static function createWithData($point, $x_shift, $y_shift, $scale)
    {
        return self::create()->setPoint($point)->setXShift($x_shift)->setYShift($y_shift)->setScale($scale);
    }

    /**
     * @param float $scale
     * @return MaskPosition
     */
    public function setScale(float $scale): MaskPosition
    {
        $this->scale = $scale;
        return $this;
    }

    /**
     * @param float $y_shift
     * @return MaskPosition
     */
    public function setYShift(float $y_shift): MaskPosition
    {
        $this->y_shift = $y_shift;
        return $this;
    }

    /**
     * @param float $x_shift
     * @return MaskPosition
     */
    public function setXShift(float $x_shift): MaskPosition
    {
        $this->x_shift = $x_shift;
        return $this;
    }

    /**
     * @param string $point
     * @return MaskPosition
     */
    public function setPoint(string $point): MaskPosition
    {
        $this->point = $point;
        return $this;
    }
}