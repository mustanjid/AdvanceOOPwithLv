<?php

namespace App\Providers;

use App\Interfaces\MessageService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Email;
use App\Services\EmailService;
use App\Services\SMSService;
use Illuminate\Notifications\Notification;
use App\Services\NotifyService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // need to bind the MessageService interface to a concrete implementation (Email or Sms)
        // whenever MessageService is injected, Laravel will automatically provide an instance of EmailService.
        // if we change the binding to SMSService, Laravel will provide an instance of SMSService
        // just a simple modification in the bind method
        $this->app->bind(MessageService::class, EmailService::class);

        //contextual binding: 
        //to setup specific implementation of an interface to inject only for a specific class.
        $this->app->when(NotifyService::class)
            ->needs(MessageService::class)
           ->give(SMSService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
