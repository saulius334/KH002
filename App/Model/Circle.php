<?php

namespace App\Model;

use App\Interfaces\Geometry;

class Circle implements Geometry {
    public function __construct($radius)
    {
     
    }
    
    public function calcPerimeter() {
        $perimeter =  2 * pi() * $this->radius;
        return $perimeter;
    }

}