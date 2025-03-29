<?php

namespace App\Traits;

trait SailTrait{
	public function sail(){
		return "{$this->model} is sailing on the water";
	}
}