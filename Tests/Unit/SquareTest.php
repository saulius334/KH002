<?php

namespace Tests\Unit;

use App\Model\Square;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class SquareTest extends TestCase
{
    public function testIfSquareWorks(): void
    {
        $square = new Square(321);
        assertEquals($square->calcPerimeter(), 321 * 4);
    }
}
