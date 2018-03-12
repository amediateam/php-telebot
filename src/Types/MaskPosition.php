<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getPoint()
 * @method float getXShift()
 * @method float getYShift()
 * @method float getScale()
 */
class MaskPosition extends BaseType
{
    protected $point;
    protected $x_shift;
    protected $y_shift;
    protected $scale;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->point = $this->getPropertyFromData('point', 'string');
        $this->x_shift = $this->getPropertyFromData('x_shift', 'float');
        $this->y_shift = $this->getPropertyFromData('y_shift', 'float');
        $this->scale = $this->getPropertyFromData('scale', 'float');
    }
}
