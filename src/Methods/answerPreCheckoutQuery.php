<?php
namespace TelegramBot\Api\Methods;
/**
 * @method answerPreCheckoutQuery setPreCheckoutQueryId(string $preCheckoutQueryId)
 * @method answerPreCheckoutQuery setOk(boolean $ok)
 * @method answerPreCheckoutQuery setErrorMessage(string $errorMessage)
 */
class answerPreCheckoutQuery extends BaseMethod
{
    protected $map = [
        'pre_checkout_query_id',
        'ok',
        'error_message',
    ];

    /**
     * @return bool
     */
    public function toResult()
    {
        return true;
    }
}
