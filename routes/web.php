<?php

use App\Services\Bird;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});