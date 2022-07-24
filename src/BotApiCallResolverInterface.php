<?php

namespace TelegramBot\Api;

interface BotApiCallResolverInterface
{
    public function call(string $method, array $data, int $timeout): mixed;
}
