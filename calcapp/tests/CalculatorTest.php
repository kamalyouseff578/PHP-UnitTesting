<?php
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase {

    /** @test */
  

    public function testSubtract(){  
        $calculator = new App\Calculator;
        $result = $calculator->subtract(21,4);
        $this->assertEquals(17, $result);

    }

}


?>
