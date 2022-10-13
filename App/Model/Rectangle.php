<?php

namespace App\Model;

use App\Interfaces\Geometry;

class Rectangle implements Geometry {
    public function __construct($sideA, $sideB)
    {
     
    }
    
    public function calcPerimeter() {
        $perimeter =  ($this->sideA + $this->sideB) * 2;
        return $perimeter;
    }

}