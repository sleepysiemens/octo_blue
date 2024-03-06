<?php

namespace App\Telegram;

use DefStudio\Telegraph\Handlers\WebhookHandler;

class Handler extends WebhookHandler
{
    public function start()
    {
        $this->reply($this->message->toArray()['chat']['id']);
    }
}
