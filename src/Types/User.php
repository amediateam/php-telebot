<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\getUserProfilePhotos;

/**
 * @method integer getId()
 * @method string getFirstName()
 * @method string getLastName()
 * @method string getUsername()
 * @method string getLanguageCode()
 */
class User extends BaseType
{
    protected $id;
    protected $is_bot;
    protected $first_name;
    protected $last_name;
    protected $username;
    protected $language_code;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->id = $this->getPropertyFromData('id', 'integer');
        $this->is_bot = $this->getPropertyFromData('is_bot', 'bool');
        $this->first_name = $this->getPropertyFromData('first_name', 'string');
        $this->last_name = $this->getPropertyFromData('last_name', 'string');
        $this->username = $this->getPropertyFromData('username', 'string');
        $this->language_code = $this->getPropertyFromData('language_code', 'string');
    }

    public function isBot()
    {
        return $this->is_bot;
    }

    /**
     * @param null $offset
     * @param null $limit
     * @return UserProfilePhotos
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function getUserProfilePhotos($offset = null, $limit = null)
    {
        return getUserProfilePhotos::create($this->botApi)
            ->setOffset($offset)->setUserId($this->getId())->setLimit($limit)
            ->execute();
    }
}
