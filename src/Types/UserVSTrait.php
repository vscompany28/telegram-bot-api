<?php

namespace TelegramBot\Api\Types;

trait UserVSTrait
{
    public function makeTitleAsHTML(bool $withUsername = true): string
    {
        $id = $this->getId();
        $title = trim($this->getFirstName() . ' ' . $this->getLastName());

        if ($withUsername && $username = $this->getUsername()) {
            $title .= " @$username";
        }

        return "<a href='tg://user?id=$id'>$title</a>";
    }
}
