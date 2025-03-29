<?php

namespace App\Traits;

trait DriveTrait{
	public function drive(){
		return "{$this->model} is driving on the land";
	}
}