<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getResultId()
 * @method User getFrom()
 * @method Location getLocation()
 * @method string getInlineMessageId()
 * @method string getQuery()
 */
class ChosenInlineResult extends BaseType
{
    /** @var bool|int|null|string */
    protected $result_id;
    /** @var bool|int|null|string */
    protected $from;
    /** @var bool|int|null|string */
    protected $location;
    /** @var bool|int|null|string */
    protected $inline_message_id;
    /** @var bool|int|null|string */
    protected $query;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->result_id = $this->getPropertyFromData('result_id', 'string');
        $this->from = $this->getPropertyFromData('from', User::class);
        $this->location = $this->getPropertyFromData('location', Location::class);
        $this->inline_message_id = $this->getPropertyFromData('inline_message_id', 'string');
        $this->query = $this->getPropertyFromData('query;', 'string');
    }
}
