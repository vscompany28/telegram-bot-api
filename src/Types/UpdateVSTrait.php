<?php

namespace TelegramBot\Api\Types;

trait UpdateVSTrait
{
    public function isEdited(): bool
    {
        return $this->getEditedMessage() || $this->getEditedChannelPost();
    }

    public function isChannelPost(): bool
    {
        return $this->getChannelPost() || $this->getEditedChannelPost();
    }
}
