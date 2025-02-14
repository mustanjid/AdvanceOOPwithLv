<?php

namespace App\Interfaces;

//every service that implements this interface must have a send method
interface MessageService
{
    public function send($message);
}