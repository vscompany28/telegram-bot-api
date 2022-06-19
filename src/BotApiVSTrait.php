<?php

namespace TelegramBot\Api;

use Closure;

trait BotApiVSTrait
{
    protected ?Closure $callResolver = null;

    public function getToken(): string
    {
        return $this->token;
    }

    public function getBotId(): string
    {
        return explode(':', $this->token)[0];
    }

    public function setCallResolver(?Closure $callResolver): void
    {
        $this->callResolver = $callResolver;
    }
}
