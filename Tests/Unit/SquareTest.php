<?php

namespace Tests\Unit;

use App\Model\Square;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class SquareTest extends TestCase
{
    public function test_if_square_works() : void {
        $sqr = new Square(5);
        assertEquals($sqr, 5);
        assertEquals($sqr->calcPerimeter(), 5 * 4);
    }
}