<?php

namespace App\Model;

use App\Interfaces\Shape;

class Circle implements Shape
{
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calcPerimeter(): float
    {
        $perimeter =  2 * pi() * $this->radius;
        return $perimeter;
    }
}
