<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;
use TelegramBot\Api\Methods\answerInlineQuery;

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
    /** @var Location */
    protected $location;
    /** @var string */
    protected $query;
    /** @var string */
    protected $offset;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->id = $this->getPropertyFromData('id', 'string');
        $this->from = $this->getPropertyFromData('from', User::class);
        $this->location = $this->getPropertyFromData('location', Location::class);
        $this->query = $this->getPropertyFromData('query', 'string');
        $this->offset = $this->getPropertyFromData('offset', 'string');
    }

    /**
     * @return bool
     * @throws \TelegramBot\Api\Exceptions\TelegramException
     */
    public function answer(array $results, $cacheTime = null, $isPersonal = null,
                           $nextOffset = null, $switchPmText = null, $switchPmParameter = null)
    {
        return answerInlineQuery::create($this->botApi)
            ->setInlineQueryId($this->getId())
            ->setResults($results)
            ->setCacheTime($cacheTime)
            ->setIsPersonal($isPersonal)
            ->setNextOffset($nextOffset)
            ->setSwitchPmText($switchPmText)
            ->setSwitchPmParameter($switchPmParameter)
            ->execute();
    }
}
