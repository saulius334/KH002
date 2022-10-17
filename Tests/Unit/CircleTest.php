<?php

namespace Tests\Unit;

use App\Model\Circle;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class CircleTest extends TestCase
{
    public function testIfCircleWorks(): void
    {
        $circle = new Circle(111);
        // assertEquals($circle->radius, 111);
        assertEquals($circle->calcPerimeter(), 2 * pi() * 111);
    }
}
