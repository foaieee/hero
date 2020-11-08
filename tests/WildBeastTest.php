<?php

use Core\WildBeast;
use PHPUnit\Framework\TestCase;

final class WildBeastTest extends TestCase{

    public function testGetName()
    {
        $ordeus=new WildBeast();
        $this->assertEquals("Wild beast",$ordeus->getName());
    }

    public function testHealth()
    {
        $ordeus=new WildBeast();
        $this->assertGreaterThanOrEqual(60,$ordeus->getHealth());
        $this->assertLessThanOrEqual(90,$ordeus->getHealth());
    }

    public function testStrenght()
    {
        $ordeus=new WildBeast();
        $this->assertGreaterThanOrEqual(60,$ordeus->getStrenght());
        $this->assertLessThanOrEqual(90,$ordeus->getStrenght());
    }

    public function testDefence()
    {
        $ordeus=new WildBeast();
        $this->assertGreaterThanOrEqual(40,$ordeus->getDefence());
        $this->assertLessThanOrEqual(60,$ordeus->getDefence());
    }

    public function testSpeed()
    {
        $ordeus=new WildBeast();
        $this->assertGreaterThanOrEqual(40,$ordeus->getSpeed());
        $this->assertLessThanOrEqual(60,$ordeus->getSpeed());
    }

    public function testLuck()
    {
        $ordeus=new WildBeast();
        $this->assertGreaterThanOrEqual(25,$ordeus->getLuck());
        $this->assertLessThanOrEqual(40,$ordeus->getLuck());
    }

    public function testDefend()
    {
        $ordeus=new WildBeast();
        $this->assertGreaterThanOrEqual(0,$ordeus->defend(10));
        $this->assertGreaterThanOrEqual(0,$ordeus->defend(100));
        $this->assertGreaterThanOrEqual(0,$ordeus->defend(1000));
    }

    public function testExceptionAtack()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('The defender must be an subclass of Character');
        $ordeus=new WildBeast();
        $ordeus->atack(10);
    }
    
}