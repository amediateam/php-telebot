<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class Location extends Types\Location
{
    public function getGoogleMapUrl()
    {
        return sprintf('https://www.google.com/maps/?q=%s,%s', $this->getLatitude(), $this->getLongitude());
    }
}
