<?php
namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method string getTitle()
 * @method string getDescription()
 * @method string getStartParameter()
 * @method string getCurrency()
 * @method integer getTotalAmount()
 */
class Invoice extends BaseType
{
    /** @var string */
    protected $title;
    /** @var string */
    protected $description;
    /** @var string */
    protected $start_parameter;
    /** @var string */
    protected $currency;
    /** @var integer */
    protected $total_amount;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->title = $this->getPropertyFromData('title', 'string');
        $this->description = $this->getPropertyFromData('description', 'string');
        $this->start_parameter = $this->getPropertyFromData('start_parameter', 'string');
        $this->currency = $this->getPropertyFromData('currency', 'string');
        $this->total_amount = $this->getPropertyFromData('total_amount', 'integer');
    }
}
