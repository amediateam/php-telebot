<?php

namespace TelegramBot\Api\Entities\InputMessageContent;
class InputLocationMessageContent extends InputMessageContent
{
    /** @var float */
    protected $latitude;
    /** @var float */
    protected $longitude;
    /** @var int */
    protected $live_period;

    public static function createWithData($latitude, $longitude, $live_period = null)
    {
        return self::create()->setLatitude($latitude)->setLongitude($longitude)->setLivePeriod($live_period);
    }

    /**
     * @param int $live_period
     * @return InputLocationMessageContent
     */
    public function setLivePeriod(int $live_period): InputLocationMessageContent
    {
        $this->live_period = $live_period;
        return $this;
    }

    /**
     * @param float $longitude
     * @return InputLocationMessageContent
     */
    public function setLongitude(float $longitude): InputLocationMessageContent
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param float $latitude
     * @return InputLocationMessageContent
     */
    public function setLatitude(float $latitude): InputLocationMessageContent
    {
        $this->latitude = $latitude;
        return $this;
    }
}