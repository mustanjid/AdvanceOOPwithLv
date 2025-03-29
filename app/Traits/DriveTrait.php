<?php

namespace App\Traits;
 
//any vehicle drive on land will use this trait
trait DriveTrait{
	public function drive(){
		return "{$this->model} is driving on the land";
	}
}