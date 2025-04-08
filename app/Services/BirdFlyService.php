<?php

namespace App\Services;

class Bird
{
    public function __call($name, $arguments)
    {
        if ($name === 'fly') {
            if (count($arguments) == 0) {
                return "Flying normally\n";
            } elseif (count($arguments) == 1) {
                return "Flying at speed: {$arguments[0]}\n";
            }
        }
    }
}
