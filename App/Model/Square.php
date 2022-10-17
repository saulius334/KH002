<?php

namespace App\Model;

use App\Interfaces\Shape;

class Square implements Shape
{
    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function calcPerimeter(): float
    {
        $perimeter =  4 * $this->side;
        return $perimeter;
    }
}
