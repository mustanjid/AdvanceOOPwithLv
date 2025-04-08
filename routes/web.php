<?php

use App\Models\Bird;
use App\Models\Eagle;
use App\Models\Ostrich;
use App\Models\Sparrow;
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

Route::get('/method-override', function(){
    $bird = [
        new Bird(),
        new Eagle(),
        new Sparrow(),
        new Ostrich(),
    ];

    $results = [];
    foreach($bird as $b){
        $results[] = $b->fly();
    }

	return response()->json($results);
});