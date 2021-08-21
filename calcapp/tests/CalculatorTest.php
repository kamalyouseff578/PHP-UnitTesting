<?php
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase {

    /** @test */
    public function testAdd(){
        $calculator = new App\Calculator;
        $result = $calculator->add(21,4);
        $this->assertEquals(25, $result);

    }

  
}


?>
