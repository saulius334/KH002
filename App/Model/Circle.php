<?php

namespace Saulius\Kh002\App\Model;



use Saulius\Kh002\App\Interfaces\Shape;

class Circle implements Shape {
    public function __construct($radius)
    {
     
    }
    
    public function calcPerimeter() : float {
        $perimeter =  2 * pi() * $this->radius;
        return $perimeter;
    }

}