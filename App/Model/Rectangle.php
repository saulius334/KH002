<?php

namespace App\Model;

use App\Interfaces\Shape;

class Rectangle implements Shape
{
    public function __construct(private float $sideA, private float $sideB)
    {
    }

    public function calcPerimeter(): float
    {
        $perimeter =  ($this->sideA + $this->sideB) * 2;
        return $perimeter;
    }
}
