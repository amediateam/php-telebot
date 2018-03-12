<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getPhoneNumber()
 * @method string getFirstName()
 * @method string getLastName()
 * @method integer getUserId()
 */
class Contact extends BaseType
{
    protected $phone_number;
    protected $first_name;
    protected $last_name;
    protected $user_id;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->phone_number = $this->getPropertyFromData('phone_number', 'string');
        $this->first_name = $this->getPropertyFromData('first_name', 'string');
        $this->last_name = $this->getPropertyFromData('last_name', 'string');
        $this->user_id = $this->getPropertyFromData('user_id', 'int');
    }
}
