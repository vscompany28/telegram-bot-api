<?php

namespace TelegramBot\Api;

interface BotApiCallResolverInterface
{
    public function call(string $method, array $data = null, int $timeout = 10): mixed;
}
