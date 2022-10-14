<?php

namespace Saulius\Kh002\Tests\Unit;

use Saulius\Kh002\App\Model\Rectangle;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class RectangleTest extends TestCase
{
    public function test_if_rectangle_works() : void {
        $sqr = new Rectangle(5, 5);
        assertEquals($sqr, 5);
        assertEquals($sqr->calcPerimeter(), 5 * 4);
    }
}