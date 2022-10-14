<?php

namespace Tests\Unit;

use Saulius\Kh002\App\Model\Rhombus;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class RhombusTest extends TestCase
{
    public function test_if_rhombus_works() : void {
        $sqr = new Rhombus(5);
        assertEquals($sqr, 5);
        assertEquals($sqr->calcPerimeter(), 5 * 4);
    }
}