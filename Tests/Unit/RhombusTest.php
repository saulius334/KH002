<?php

namespace Tests\Unit;

use App\Model\Rhombus;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

final class RhombusTest extends TestCase
{
    public function testIfRhombusWorks(): void
    {
        $rhombus = new Rhombus(123456);
        // assertEquals($rhombus->side, 123456);
        assertEquals($rhombus->calcPerimeter(), 123456 * 4);
    }
}
