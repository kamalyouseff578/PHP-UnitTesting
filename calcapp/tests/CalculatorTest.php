<?php
use PHPUnit\Framework\TestCase;
class CalculatorTest extends TestCase {

    /** @test */
    

    public function testDivide(){
        $calculator = new App\Calculator;
        $result = $calculator->divide(20,4);
        $this->assertEquals(50,  $result);

    }
}


?>
