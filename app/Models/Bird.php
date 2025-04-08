<?php

namespace App\Models;

use App\Interfaces\Flyable;

class Bird implements Flyable
{
	public function fly(){
		 return "The bird is flying in a general way.";
	}
}