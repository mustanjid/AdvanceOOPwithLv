<?php 

namespace App\Models;

use App\Traits\DriveTrait;
use App\Traits\SailTrait;

class AmphibiousVehicle {
	//Trait helps to share multiple behaviours at the same time easily
	use DriveTrait, SailTrait;
}