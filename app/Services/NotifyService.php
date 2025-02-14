<?php

namespace App\Services;
use App\Interfaces\MessageService;

class NotifyService
{
    private $messageService;

    // Inject the dependency in the constructor- constructor injection
    // whenever this class is instantiated, laravel bound and will automatically inject the MessageService instance
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function send($message)
    {
        return $this->messageService->send($message);
    }
    
}