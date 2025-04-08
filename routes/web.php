<?php

use App\Services\Bird;
use App\Services\BirdFlyService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/method-overload', function(){
	$birds = new BirdFlyService();
	
	return response()->json([
		$birds->fly(), // no args
		$birds->fly('fast'), // 1 args
		$birds->fly('fast', 'north'), // 2 args
        $birds->flying(), // method does not exist
        $birds->fly('fast', 'north', 'extra'), // method does not exist 
	]);
});