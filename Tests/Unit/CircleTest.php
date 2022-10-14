<?php

namespace Saulius\Kh002\Tests\Unit;

use Saulius\Kh002\App\Model\Circle;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class CircleTest extends TestCase
{
    public function test_if_circle_works() : void {
        $sqr = new Circle(5);
        assertEquals($sqr->radius, 5);
        assertEquals($sqr->calcPerimeter(), 5 * 4);
    }
}