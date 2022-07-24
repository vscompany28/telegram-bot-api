<?php

namespace TelegramBot\Api;

trait BotApiVSTrait
{
    protected ?BotApiCallResolverInterface $callResolver = null;
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

    public function setCallResolver(?BotApiCallResolverInterface $callResolver): void
    {
        $this->callResolver = $callResolver;
    }

    public function getCallResolver(): ?BotApiCallResolverInterface
    {
        return $this->callResolver;
    }

    public function setCache(BotApiCacheInterface $cache): void
    {
        $this->cache = $cache;
    }
}
