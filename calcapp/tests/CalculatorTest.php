<?php
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase {

    /** @test */
    public function testAdd(){
        $calculator = new App\Calculator;
        $result = $calculator->add(21,4);
        $this->assertEquals(25, $result);

    }

    public function testSubtract(){  
        $calculator = new App\Calculator;
        $result = $calculator->subtract(21,4);
        $this->assertEquals(17, $result);

    }

    public function testMultiply(){
        $calculator = new App\Calculator;
        $result = $calculator->multiply(21,4);
        $this->assertEquals(84, $result);

    }

    public function testDivide(){
        $calculator = new App\Calculator;
        $result = $calculator->divide(20,4);
        $this->assertEquals(50,  $result);

    }
}


?>