<?php

namespace Tests\Unit;

use App\Model\Rectangle;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class RectangleTest extends TestCase
{
    public function testIfRectangleWorks(): void
    {
        $rectangle = new Rectangle(123, 321);
        // assertEquals($rectangle->sideA, 123);
        // assertEquals($rectangle->sideB, 321);
        assertEquals($rectangle->calcPerimeter(), 123 * 2 + 321 * 2);
    }
}
