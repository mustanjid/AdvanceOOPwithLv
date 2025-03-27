<?php 

namespace App\Repositories;

abstract class BaseRepository
{
    protected $model;
	
	//abstract class can have a constructor
    public function __construct($model){
		$this->model = $model;
	}
	
	//concrete method
	public function logger(){
		return "log:";
	}
	
	//abstract method which must implement by child class
	abstract public function getAll();
}