<?php

namespace App\Services;

use App\Interfaces\MessageService;

//this class implements the MessageService interface
class SMSService implements MessageService
{
    public function send($message)
    {
        return "SMS sent: " . $message;
    }
}