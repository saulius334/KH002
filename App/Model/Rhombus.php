<?php

namespace Saulius\Kh002\App\Model;

use Saulius\Kh002\App\Interfaces\Shape;

class Rhombus implements Shape {
    public function __construct($side)
    {
     
    }
    
    public function calcPerimeter() : float {
        $perimeter =  $this->side * 4;
        return $perimeter;
    }

}