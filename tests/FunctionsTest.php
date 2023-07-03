<?php
use PHPUnit\Framework\TestCase;
require "functions.php";

class FunctionsTest extends TestCase{
    public function testAddReturnsTheCorrectSum(){
        $this->assertEquals(8, add(3,5));
        $this->assertEquals(2, add(1,1));
    }
    public function testAddDoesNotReturnTheInCorrectSum(){
        $this->assertNotEquals(7, add(3,5)); 
    }
}