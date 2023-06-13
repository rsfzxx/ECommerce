<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAddition()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}
