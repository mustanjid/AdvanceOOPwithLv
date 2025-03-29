<?php

use Illuminate\Support\Facades\Route;
use App\Models\Boat;
use App\Models\Car;
use App\Models\AmphibiousVehicle;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/vehicles', function(){
	$car = new Car(['model' => 'Tesla', 'speed' => 150]);
	$boat = new Boat(['model' => 'Yamaha', 'speed' => 80]);
	$amphibious  = new AmphibiousVehicle(['model' => 'Hydra Spyder', 'speed' => 100]);
	
	return [
		'Car Drive' => $car->move().", ".$car->drive(),
		'Boat Sail' => $boat->move().", ".$boat->Sail(),
		'Amphibious Drive' => $amphibious->move().", ".$amphibious->drive(),
        'Amphibious Sail' => $amphibious->move().", ".$amphibious->sail(),
	];
});