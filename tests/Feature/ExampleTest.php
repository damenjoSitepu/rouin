<?php 

namespace damenjositepu\Rouin\Tests;

use damenjositepu\Rouin\CountNumber;
use damenjositepu\Rouin\HelloWorld;
use damenjositepu\Rouin\Operator;
use Orchestra\Testbench\TestCase;

class ExampleTest extends TestCase {
    /** @test */
    public function helloWorld()
    {
        $hello = HelloWorld::say();
        $this->assertEquals('Hello World',$hello,'Not match!');
    }

    /** @test */
    public function testSingleton()
    {
        $secretNumber = CountNumber::inc()->inc()->inc()->get();
        $this->assertEquals(3,$secretNumber,'Invalid number!');
    }

    /** @test */
    public function testSingletonBehavior()
    {
        $secretNumber = CountNumber::inc()->get();
        $this->assertEquals(4,$secretNumber,'Invalid number!');
    }

    /** @test */
    public function testObject()
    {
        $secretNumber = CountNumber::get();
    }

    /** @test */
    public function testCount()
    {
        $count = Operator::choose('*',3)->get();
        $this->assertEquals(9,$count);
    }
}