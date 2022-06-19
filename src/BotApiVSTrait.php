<?php

namespace TelegramBot\Api;

trait BotApiVSTrait
{
    public function getToken(): string
    {
        return $this->token;
    }

    public function getBotId(): string
    {
        return explode(':', $this->token)[0];
    }
}
