<?php

namespace TelegramBot\Api\Entities;
class LabeledPrice extends BaseEntity
{
    /** @var string */
    protected $label;
    /** @var integer */
    protected $amount;

    public static function createWithData(string $label, int $amount)
    {
        return self::create()->setLabel($label)->setAmount($amount);
    }

    /**
     * @param int $amount
     * @return LabeledPrice
     */
    public function setAmount(int $amount): LabeledPrice
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $label
     * @return LabeledPrice
     */
    public function setLabel(string $label): LabeledPrice
    {
        $this->label = $label;
        return $this;
    }
}