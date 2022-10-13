<?php

namespace App\Model;

use App\Interfaces\Geometry;

class Square implements Geometry {

    public function __construct($side)
    {
     
    }
    
    public function calcPerimeter() {
        $perimeter =  4 * $this->side;
        return $perimeter;
    }

}

$gaidys = new Square(5);
$gaidys->calcPerimeter();