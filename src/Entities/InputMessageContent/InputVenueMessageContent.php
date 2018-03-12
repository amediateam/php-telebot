<?php

namespace TelegramBot\Api\Entities\InputMessageContent;
class InputVenueMessageContent extends InputMessageContent
{
    /** @var float */
    protected $latitude;
    /** @var float */
    protected $longitude;
    /** @var string */
    protected $title;
    /** @var string */
    protected $address;
    /** @var string */
    protected $foursquare_id;

    public static function createWithData($latitude, $longitude, $title, $address, $foursquare_id = null)
    {
        return self::create()->setLatitude($latitude)->setLongitude($longitude)->setTitle($title)->setAddress($address)
            ->setFoursquareId($foursquare_id);
    }

    /**
     * @param string $foursquare_id
     * @return InputVenueMessageContent
     */
    public function setFoursquareId(string $foursquare_id): InputVenueMessageContent
    {
        $this->foursquare_id = $foursquare_id;
        return $this;
    }

    /**
     * @param string $address
     * @return InputVenueMessageContent
     */
    public function setAddress(string $address): InputVenueMessageContent
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $title
     * @return InputVenueMessageContent
     */
    public function setTitle(string $title): InputVenueMessageContent
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param float $longitude
     * @return InputVenueMessageContent
     */
    public function setLongitude(float $longitude): InputVenueMessageContent
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param float $latitude
     * @return InputVenueMessageContent
     */
    public function setLatitude(float $latitude): InputVenueMessageContent
    {
        $this->latitude = $latitude;
        return $this;
    }
}