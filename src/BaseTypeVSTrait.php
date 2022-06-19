<?php

namespace TelegramBot\Api;

trait BaseTypeVSTrait
{
    protected array $cleanData = [];

    public function getCleanData(): array
    {
        return $this->cleanData;
    }

    public function setCleanData(array $cleanData): void
    {
        $this->cleanData = $cleanData;
    }
}
