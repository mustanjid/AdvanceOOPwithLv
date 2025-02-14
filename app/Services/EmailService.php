<?php

namespace App\Services;
use App\Interfaces\MessageService;

//this class implements the MessageService interface
class EmailService implements MessageService
{
    public function send($message)
    {
        return "Email sent: " . $message;
    }
}