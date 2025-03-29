<?php 

namespace App\Models;

use App\Traits\SailTrait;
use App\Models\Vehicle;

class Boat extends Vehicle{
	use SailTrait;
}