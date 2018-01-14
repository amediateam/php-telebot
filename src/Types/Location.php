<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\Generated\Types;

class Location extends Types\Location
{
    public function getGoogleMapUrl()
    {
        return sprintf('https://www.google.com/maps/?q=%s,%s', $this->getLatitude(), $this->getLongitude());
    }

    public function getDistance($lat, $lng, $unit = 'K')
    {
        return $this->distance($lat, $lng, $this->getLongitude(), $this->getLongitude(), $unit);
    }

    private function distance($lat1, $lon1, $lat2, $lon2, $unit = 'K')
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}
