<?php

namespace TelegramBot\Api;

interface BotApiCacheInterface
{
    public function get(string $method, array $data): ?array;
    public function put(string $method, array $data, array $value): void;
}
