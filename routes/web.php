<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('welcome');
});

// this route will show us the notification
Route::get('/notification', [NotificationController::class, 'sendNotification']);