<?php
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testOnePlusOne() {
        $this->assertEquals(1+1,2);
    }
    
    public function testOneMinusOne() {
        $this->assertEquals(1-1,0);
    }
    
    public function testEmpty() {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }    
}