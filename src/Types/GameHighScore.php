<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method integer getPosition()
 * @method User getUser()
 * @method integer getScore()
 */
class GameHighScore extends BaseType
{
    /** @var bool|int|null|string */
    protected $position;
    /** @var bool|int|null|string */
    protected $user;
    /** @var bool|int|null|string */
    protected $score;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->position = $this->getPropertyFromData('position', 'int');
        $this->user = $this->getPropertyFromData('user', User::class);
        $this->score = $this->getPropertyFromData('score', 'int');
    }


}
