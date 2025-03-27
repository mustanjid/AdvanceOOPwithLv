<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller {
	protected $userRepository;
	
	public function __construct(UserRepository $userRepository){
		$this->userRepository = $userRepository;
	}
	
	public function index(){
		return response()->json($this->userRepository->getAll());
	}
}