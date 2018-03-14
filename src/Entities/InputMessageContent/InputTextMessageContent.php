<?php

namespace TelegramBot\Api\Entities\InputMessageContent;
class InputTextMessageContent extends InputMessageContent
{
    /** @var string */
    protected $message_text;
    /** @var string */
    protected $parse_mode;
    /** @var bool */
    protected $disable_web_page_preview;

    public static function createWithData($message_text, $parse_mode = null, $disable_web_page_preview = false)
    {
        return self::create()->setMessageText($message_text)->setParseMode($parse_mode)
            ->setDisableWebPagePreview($disable_web_page_preview);
    }

    /**
     * @param bool $disable_web_page_preview
     * @return InputTextMessageContent
     */
    public function setDisableWebPagePreview(bool $disable_web_page_preview): InputTextMessageContent
    {
        $this->disable_web_page_preview = $disable_web_page_preview;
        return $this;
    }

    /**
     * @param string $parse_mode
     * @return InputTextMessageContent
     */
    public function setParseMode($parse_mode): InputTextMessageContent
    {
        $this->parse_mode = $parse_mode;
        return $this;
    }

    /**
     * @param string $message_text
     * @return InputTextMessageContent
     */
    public function setMessageText($message_text): InputTextMessageContent
    {
        $this->message_text = $message_text;
        return $this;
    }
}