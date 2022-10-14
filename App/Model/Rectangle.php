<?php

namespace Saulius\Kh002\App\Model;

use Saulius\Kh002\App\Interfaces\Shape;

class Rectangle implements Shape {
    public function __construct($sideA, $sideB)
    {
     
    }
    
    public function calcPerimeter() : float {
        $perimeter =  ($this->sideA + $this->sideB) * 2;
        return $perimeter;
    }

}