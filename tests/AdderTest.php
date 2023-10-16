<?php

use Adder\Adder;
use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    public function testAddition()
    {
        $adder = new Adder();
        $result = $adder->add(5, 3);
        $this->assertEquals(8, $result);
    }
}
