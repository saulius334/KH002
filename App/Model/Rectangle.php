<?php

namespace App\Model;

use App\Interfaces\Shape;

class Rectangle implements Shape
{
    public function __construct(float $sideA, float $sideB)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
    }

    public function calcPerimeter(): float
    {
        $perimeter =  ($this->sideA + $this->sideB) * 2;
        return $perimeter;
    }
}
