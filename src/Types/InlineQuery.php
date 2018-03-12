<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getId()
 * @method User getFrom()
 * @method Location getLocation()
 * @method string getQuery()
 * @method string getOffset()
 */
class InlineQuery extends BaseType
{
    /** @var string */
    protected $id;
    /** @var User */
    protected $from;
    /** @var string */
    protected $query;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->id = $this->getPropertyFromData('id', 'string');
        $this->from = $this->getPropertyFromData('from', User::class);
        $this->query = $this->getPropertyFromData('query', 'string');
    }
}
