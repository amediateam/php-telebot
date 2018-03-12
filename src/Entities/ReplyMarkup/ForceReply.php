<?php

namespace TelegramBot\Api\Entities\ReplyMarkup;

use TelegramBot\Api\Entities\BaseEntity;

class ForceReply extends BaseEntity
{
    protected $force_reply = true;
    protected $selective;

    public static function selective()
    {
        return self::create()->setSelective(true);
    }

    /**
     * @param mixed $selective
     * @return ForceReply
     */
    public function setSelective($selective)
    {
        $this->selective = $selective;
        return $this;
    }

    /**
     * @param bool $force_reply
     * @return ForceReply
     */
    public function setForceReply(bool $force_reply): ForceReply
    {
        $this->force_reply = $force_reply;
        return $this;
    }
}