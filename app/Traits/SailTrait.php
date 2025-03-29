<?php

namespace App\Traits;

//any vehicle sail on water will use this trait
trait SailTrait{
	public function sail(){
		return "{$this->model} is sailing on the water";
	}
}