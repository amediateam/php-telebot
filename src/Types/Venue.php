<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method Location getLocation()
 * @method string getTitle()
 * @method string getAddress()
 * @method string getFoursquareId()
 */
class Venue extends BaseType
{
    protected $location;
    protected $title;
    protected $address;
    protected $foursquare_id;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->location = $this->getPropertyFromData('location', Location::class);
        $this->title = $this->getPropertyFromData('title', 'string');
        $this->foursquare_id = $this->getPropertyFromData('foursquare_id', 'string');
    }
}
