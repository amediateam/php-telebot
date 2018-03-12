<?php

namespace TelegramBot\Api\Entities;
class ShippingOption extends BaseEntity
{
    /** @var string */
    protected $id;
    /** @var string */
    protected $title;
    /** @var LabeledPrice[] */
    protected $prices;

    /**
     * @param $id
     * @param $title
     * @param LabeledPrice[] $prices
     */
    public static function createWithData($id, $title, array $prices)
    {
        return self::create()->setId($id)->setTitle($title)->setPrices($prices);
    }

    /**
     * @param LabeledPrice[] $prices
     * @return ShippingOption
     */
    public function setPrices(array $prices): ShippingOption
    {
        $this->prices = $prices;
        return $this;
    }

    /**
     * @param string $title
     * @return ShippingOption
     */
    public function setTitle(string $title): ShippingOption
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $id
     * @return ShippingOption
     */
    public function setId(string $id): ShippingOption
    {
        $this->id = $id;
        return $this;
    }
}