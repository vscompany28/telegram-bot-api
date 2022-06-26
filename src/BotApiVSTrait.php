<?php

namespace TelegramBot\Api;

use Closure;

trait BotApiVSTrait
{
    protected static ?Closure $callResolver = null;

    public static string $defaultParseMode = 'HTML';

    public function getToken(): string
    {
        return $this->token;
    }

    public function getBotId(): string
    {
        return explode(':', $this->token)[0];
    }

    public static function setCallResolver(?Closure $callResolver): void
    {
        static::$callResolver = $callResolver;
    }
}
