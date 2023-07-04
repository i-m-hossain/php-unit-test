<?php
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase{
    public function testGetFullName(){
        $user = new User;
        $user->firstName = 'imran';
        $user->lastName='hossain';
        $this->assertEquals('imran hossain', $user->getFullName());
    }
    /**
     * @test
     */
    public function full_name_is_empty_by_default(){
        $user = new User;
        
        $this->assertEquals('', $user->getFullName());
    }
}