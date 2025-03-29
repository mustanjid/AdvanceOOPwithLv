<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Vehicle extends Model{
    protected $fillable = ['model', 'speed'];
	
	public function move(){
		return "{$this->model} is moving at {$this->speed} km/h.";
	}
}