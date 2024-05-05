<?php

require 'white_testing.php';

use PHPUnit\Framework\TestCase;

class WhiteTestingTest extends TestCase {
    public function testSumRange() {
        $whiteTesting = new WhiteTesting();

        // Test case 1: Sum of even numbers from 1 to 10
        $this->assertEquals(30, $whiteTesting->sumRange(1, 10));

        // Test case 2: Sum of even numbers from 1 to 5
        $this->assertEquals(6, $whiteTesting->sumRange(1, 5));

        // Test case 3: Sum of even numbers from 3 to 8
        $this->assertEquals(18, $whiteTesting->sumRange(3, 8));

        // Test case 4: Sum of even numbers from 5 to 15
        $this->assertEquals(50, $whiteTesting->sumRange(5, 15));
    }
}


