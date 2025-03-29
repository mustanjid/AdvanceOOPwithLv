<?php 

namespace App\Models;

use App\Traits\DriveTrait;
use App\Models\Vehicle;

class Car extends Vehicle{
	use DriveTrait;
}