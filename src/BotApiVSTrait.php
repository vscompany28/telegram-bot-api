<?php

namespace TelegramBot\Api;

use Closure;

trait BotApiVSTrait
{
    protected ?Closure $callResolver = null;
    protected ?BotApiCacheInterface $cache = null;

    public static string $defaultParseMode = 'HTML';

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

    public function getCallResolver(): ?Closure
    {
        return $this->callResolver;
    }

    public function setCache(BotApiCacheInterface $cache): void
    {
        $this->cache = $cache;
    }
}
