<?php

namespace App\Model;

use App\Interfaces\Shape;

class Rhombus implements Shape
{
    public function __construct(private float $side)
    {
    }

    public function calcPerimeter(): float
    {
        $perimeter =  $this->side * 4;
        return $perimeter;
    }
}
