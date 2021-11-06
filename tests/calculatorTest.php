<?php

use PHPUnit\Framework\TestCase;

require "calculator.php";

class calculatorTest extends TestCase
{

    public function test_assert_add()
    {
        $cal1 = new calculator();
        $this->assertEquals($cal1->add(1, 1), 2);
    }

    public function test_assert_sub()
    {
        $cal1 = new calculator();
        $this->assertEquals($cal1->sub(5, 4), 1);
    }
    public function test_assert_mult()
    {
        $cal1 = new calculator();
        $this->assertEquals($cal1->multi(2, 2), 4);
    }
    public function test_assert_div()
    {
        $cal1 = new calculator();
        $this->assertEquals($cal1->div(6, 2), 3);
    }
}
