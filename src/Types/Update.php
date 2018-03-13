<?php

namespace TelegramBot\Api\Types;

use TelegramBot\Api\BotApi;

/**
 * @method integer getUpdateId()
 * @method Message getMessage()
 * @method Message getEditedMessage()
 * @method Message getChannelPost()
 * @method Message getEditedChannelPost()
 * @method InlineQuery getInlineQuery()
 * @method ChosenInlineResult getChosenInlineResult()
 * @method CallbackQuery getCallbackQuery()
 * @method ShippingQuery getShippingQuery()
 * @method PreCheckoutQuery getPreCheckoutQuery()
 */
class Update extends BaseType
{
    protected $update_id;
    protected $message;
    protected $edited_message;
    protected $channel_post;
    protected $edited_channel_post;
    protected $inline_query;
    protected $chosen_inline_result;
    protected $callback_query;
    protected $shipping_query;
    protected $pre_checkout_query;

    public function __construct(array $data, BotApi $botApi)
    {
        parent::__construct($data, $botApi);
        $this->update_id = $this->getPropertyFromData('update_id', 'integer');
        $this->message = $this->getPropertyFromData('message', Message::class);
        $this->edited_message = $this->getPropertyFromData('edited_message', Message::class);
        $this->channel_post = $this->getPropertyFromData('channel_post', Message::class);
        $this->edited_channel_post = $this->getPropertyFromData('edited_channel_post', Message::class);
        $this->inline_query = $this->getPropertyFromData('inline_query', InlineQuery::class);
        $this->chosen_inline_result = $this->getPropertyFromData('chosen_inline_result', ChosenInlineResult::class);
        $this->callback_query = $this->getPropertyFromData('callback_query', CallbackQuery::class);
        $this->shipping_query = $this->getPropertyFromData('shipping_query', ShippingQuery::class);
        $this->pre_checkout_query = $this->getPropertyFromData('pre_checkout_query', ShippingQuery::class);
    }

    /** @var Chat */
    protected $effectiveChat = null;

    public function getEffectiveChat()
    {
        if ($this->effectiveChat !== null) {
            return $this->effectiveChat;
        }
        if ($this->getEffectiveMessage()) {
            return $this->effectiveChat = $this->getEffectiveMessage()->getChat();
        }
        if($this->getCallbackQuery() instanceof CallbackQuery){
            return $this->effectiveChat = $this->getCallbackQuery()->getMessage()->getChat();
        }
        return $this->effectiveChat = false;
    }

    /** @var boolean */
    protected $isEdited = null;

    public function isEdited()
    {
        if ($this->isEdited !== null) {
            return $this->isEdited;
        }
        return $this->isEdited = (false !== (bool)$this->getEditedMessage() || false !== (bool)$this->getEditedChannelPost());
    }

    /** @var boolean */
    protected $isChannelPost = null;

    public function isChannelPost()
    {
        if ($this->isChannelPost !== null) {
            return $this->isChannelPost;
        }
        return $this->isChannelPost = (false !== (bool)$this->getChannelPost() || false !== (bool)$this->getEditedChannelPost());
    }

    /** @var Message */
    protected $effectiveMessage = null;

    public function getEffectiveMessage()
    {
        if ($this->effectiveMessage != null) {
            return $this->effectiveMessage;
        }
        $arr = [
            $this->getMessage(),
            $this->getEditedMessage(),
            $this->getChannelPost(),
            $this->getEditedChannelPost()
        ];
        foreach ($arr as $k) {
            if (false !== $k) {
                $this->effectiveMessage = $k;
                return $k;
            }
        }
        return $this->effectiveMessage = false;
    }
}
