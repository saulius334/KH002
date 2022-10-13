<?php

namespace App\Model;

use App\Interfaces\Geometry;

class Rectangle implements Geometry {
    public function __construct($side)
    {
     
    }
    
    public function calcPerimeter() {
        $perimeter =  $this->side * 4;
        return $perimeter;
    }

}