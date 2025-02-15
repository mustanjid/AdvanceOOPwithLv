<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MessageService;
use GuzzleHttp\Psr7\Message;
use Mockery\Matcher\Not;
use App\Services\NotifyService;

class NotificationController extends Controller
{
    private $messageService;
    private $notifyService; //contextual binding
    
    //expects an instance of MessageService
    //When Laravel instantiates this controller, it automatically injects the bound implementation of MessageService
    /* thru this, we can send notifications without worrying about which 
    specific message service (Email or SMS) is being used */
    public function __construct(MessageService $messageService, NotifyService $notifyService)
    {
        $this->messageService = $messageService;
        $this->notifyService = $notifyService;
    }

    //return the response from the send method of the injected MessageService instance
    public function sendNotification(){
        return response()->json(
            [
                "Email with binding & constructor injection of DI" => $this->messageService->send("Emailed by constructor injection"),
                "SMS with contextual binding injection of DI" => $this->notifyService->send("")
            ]
        );
    }

    //Method Injection (MI)
    public function sendNotificationWithMI(MessageService $messageService)
    {
        return response()->json([
            'message' => $messageService->send("Emailed by method injection")
        ]);
    }
    
}
