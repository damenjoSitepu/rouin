<?php 

namespace damenjositepu\Rouin\Tests;

use damenjositepu\Rouin\Operator;
use Orchestra\Testbench\TestCase;

class OperatorTest extends TestCase {
    public function testOperator()
    {
        $this->assertEquals(10,Operator::choose('+',5)->get());
    }

    public function testPassOperator()
    {
        $this->assertEquals(10, Operator::choose('+',5)->pass(1)->get());
    }
}