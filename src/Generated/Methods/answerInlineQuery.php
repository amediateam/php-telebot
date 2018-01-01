<?php
namespace TelegramBot\Api\Generated\Methods;
use TelegramBot\Api\BaseMethod;
/**
 * @method \TelegramBot\Api\Methods\answerInlineQuery setInlineQueryId(string $inlineQueryId)
 * @method string getInlineQueryId()
 * @method \TelegramBot\Api\Methods\answerInlineQuery setResults(\TelegramBot\Api\Types\InlineQueryResult[] $results)
 * @method \TelegramBot\Api\Types\InlineQueryResult[] getResults()
 * @method \TelegramBot\Api\Methods\answerInlineQuery setCacheTime(integer $cacheTime)
 * @method integer getCacheTime()
 * @method \TelegramBot\Api\Methods\answerInlineQuery setIsPersonal(boolean $isPersonal)
 * @method boolean getIsPersonal()
 * @method \TelegramBot\Api\Methods\answerInlineQuery setNextOffset(string $nextOffset)
 * @method string getNextOffset()
 * @method \TelegramBot\Api\Methods\answerInlineQuery setSwitchPmText(string $switchPmText)
 * @method string getSwitchPmText()
 * @method \TelegramBot\Api\Methods\answerInlineQuery setSwitchPmParameter(string $switchPmParameter)
 * @method string getSwitchPmParameter()
*/
class answerInlineQuery extends BaseMethod
{
	static protected $requiredParams = [
		'inline_query_id',
		'results'
	];
	static protected $map = [
		'inline_query_id' => 'string',
		'results' => \TelegramBot\Api\Iterators\ArrayOfInlineQueryResult::class,
		'cache_time' => 'integer',
		'is_personal' => 'boolean',
		'next_offset' => 'string',
		'switch_pm_text' => 'string',
		'switch_pm_parameter' => 'string',
	];
	static protected $defaultData = [
	];
}
