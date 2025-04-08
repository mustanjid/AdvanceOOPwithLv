<?php

namespace App\Services;

class BirdFlyService
{
   public function __call($function, $arguments)
   {
	   if($function === "fly"){
		   if (count($arguments) === 0){
			   return "The bird is flying normally.";
		   }elseif(count($arguments) === 1){
			   return "The bird is flying at {$arguments[0]} speed";
		   }elseif(count($arguments) === 2){
			   return "The bird is flying at {$arguments[0]} speed in the {$arguments[1]}";
		   }
	   }
	   return "Method does not exist";
   }
}
